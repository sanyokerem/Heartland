<?php
namespace Payum\Heartland\Tests\Functional;

use \DateTime;
use Payum\Heartland\Model\PaymentDetails;
use Payum\Heartland\Soap\Base\ACHAccountType;
use Payum\Heartland\Soap\Base\ACHDepositType;
use Payum\Heartland\Soap\Base\BillTransaction;
use Payum\Heartland\Soap\Base\CardProcessingMethod;
use Payum\Heartland\Soap\Base\GetTokenRequest;
use Payum\Heartland\Soap\Base\GetTokenResponse;
use Payum\Heartland\Soap\Base\MakePaymentRequest;
use Payum\Heartland\Soap\Base\TokenPaymentMethod;
use Payum\Heartland\Soap\Base\TokenToCharge;
use Payum\Heartland\Soap\Base\Transaction;
use Payum\Heartland\Soap\Base\RegisterTokenToAdditionalMerchantResponse;
use Payum\Heartland\Soap\Base\RegisterTokenToAdditionalMerchantRequest;
use Payum\Request\CaptureRequest;
use Payum\Request\BinaryMaskStatusRequest;

class TokenTest extends BaseTestCase
{
    /**
     * @var string
     */
    protected static $token;

    /**
     * @var double
     */
    protected static $amount = 10.00;

    /**
     * @var double
     */
    protected static $feeAmount = 0.10;

    /**
     * @test
     */
    public function shouldAllowCaptureGetTokenRequestACH()
    {
        $payment = $this->getPayment();

        $request = new GetTokenRequest();
        $request->setACHAccountType(ACHAccountType::PERSONAL);
        $request->setACHDepositType(ACHDepositType::CHECKING);
        $request->getAccountHolderData()->setEmail('JQAdams@gmail.com');
        $request->getAccountHolderData()->setFirstName('John');
        $request->getAccountHolderData()->setLastName('Adams');
        $request->getAccountHolderData()->setPhone('1112223333');
//        $request->getAccountHolderData()->setAddress('123 Main Street');
//        $request->getAccountHolderData()->setCity('Washington');
//        $request->getAccountHolderData()->setState('DC');
//        $request->getAccountHolderData()->setZip('12321');
        $request->setRoutingNumber('062202574');
        $request->setAccountNumber('123245678');
        $request->setPaymentMethod(TokenPaymentMethod::ACH);

        $paymentDetails = new PaymentDetails();
        $paymentDetails->setMerchantName($GLOBALS['__PAYUM_HEARTLAND_MERCHANT_NAME']);
        $paymentDetails->setRequest($request);

        $captureRequest = new CaptureRequest($paymentDetails);
        $payment->execute($captureRequest);

        $statusRequest = new BinaryMaskStatusRequest($captureRequest->getModel());
        $payment->execute($statusRequest);

        /** @var GetTokenResponse $response */
        $response = $statusRequest->getModel()->getResponse();

        $this->assertTrue($statusRequest->isSuccess(), $paymentDetails->getMessages());
        $this->assertNotEmpty(static::$token = $response->getToken());
    }

    public function makePayment()
    {
        $payment = $this->getPayment();

        $request = new MakePaymentRequest();
        $billTransaction = new BillTransaction();
//        $billTransaction->setBillType('Bill Payment');
        $billTransaction->setID1(1);
        $billTransaction->setAmountToApplyToBill(static::$amount);
        $request->getBillTransactions()->setBillTransaction(array($billTransaction));

        $tokenToCharge = new TokenToCharge();
        $tokenToCharge->setAmount(static::$amount);
        $tokenToCharge->setCardProcessingMethod(CardProcessingMethod::UNASSIGNED);
        $tokenToCharge->setExpectedFeeAmount(static::$feeAmount);
        $tokenToCharge->setToken(static::$token);


        $request->getTokensToCharge()->setTokenToCharge(array($tokenToCharge));

        $transaction = new Transaction();
        $transaction->setAmount(static::$amount);
        $transaction->setFeeAmount(static::$feeAmount);
        $request->setTransaction($transaction);


        $paymentDetails = new PaymentDetails();
        $paymentDetails->setMerchantName($GLOBALS['__PAYUM_HEARTLAND_MERCHANT_NAME']);
        $paymentDetails->setRequest($request);

        $captureRequest = new CaptureRequest($paymentDetails);
        $payment->execute($captureRequest);

        $statusRequest = new BinaryMaskStatusRequest($captureRequest->getModel());
        $payment->execute($statusRequest);

        /** @var GetTokenResponse $response */
        $response = $statusRequest->getModel()->getResponse();

        $this->assertTrue($statusRequest->isSuccess(), $paymentDetails->getMessages());
    }

    /**
     * @test
     * @depends shouldAllowCaptureGetTokenRequestACH
     */
    public function shouldAllowMakePayment()
    {
        if (false == isset($GLOBALS['__PAYUM_HEARTLAND_ACH_FEE'])) {
            $this->markTestSkipped('Please configure __PAYUM_HEARTLAND_ACH_FEE in your phpunit.xml');
        }
        static::$feeAmount = $GLOBALS['__PAYUM_HEARTLAND_ACH_FEE'];
        $this->makePayment();
    }

    /**
     * @test
     */
    public function shouldAllowCaptureGetTokenRequestForCredit()
    {
        $payment = $this->getPayment();

        $request = new GetTokenRequest();
        $request->getAccountHolderData()->setEmail('JQAdams@gmail.com');
        $request->getAccountHolderData()->setFirstName('John');
        $request->getAccountHolderData()->setLastName('Adams');
        $request->getAccountHolderData()->setPhone('1112223333');
        $request->getAccountHolderData()->setState('DC');
        $request->getAccountHolderData()->setZip('12321');
        $request->getAccountHolderData()->setAddress('123 Main Street');
        $request->getAccountHolderData()->setCity('Washington');
        $request->setAccountNumber('5473500000000014');
        $now = new DateTime('+1 year');
        $request->setExpirationMonth($now->format('m'));
        $request->setExpirationYear($now->format('Y'));
        $request->setPaymentMethod(TokenPaymentMethod::CREDIT);

        $paymentDetails = new PaymentDetails();
        $paymentDetails->setMerchantName($GLOBALS['__PAYUM_HEARTLAND_MERCHANT_NAME']);
        $paymentDetails->setRequest($request);

        $captureRequest = new CaptureRequest($paymentDetails);
        $payment->execute($captureRequest);

        $statusRequest = new BinaryMaskStatusRequest($captureRequest->getModel());
        $payment->execute($statusRequest);

        /** @var GetTokenResponse $response */
        $response = $statusRequest->getModel()->getResponse();

        $this->assertTrue($statusRequest->isSuccess(), $paymentDetails->getMessages());
        $this->assertNotEmpty(static::$token = $response->getToken());
    }

    /**
     * @test
     * @depends shouldAllowCaptureGetTokenRequestForCredit
     */
    public function shouldAllowMakePaymentFromCredit()
    {
        static::$amount = 1;
        static::$feeAmount = round(static::$amount * (2.95 / 100), 2);
        $this->makePayment();
    }

    /**
     * @test
     */
    public function shouldAllowRegisterTokenToAdditionalMerchant()
    {
        $payment = $this->getPayment();

        $request = new RegisterTokenToAdditionalMerchantRequest();
        $request->setToken(static::$token);
        $request->getRegisterToMerchantCredential()->setMerchantName($GLOBALS['__PAYUM_HEARTLAND_SECOND_MERCHANT_NAME']);

        $paymentDetails = new PaymentDetails();
        $paymentDetails->setMerchantName($GLOBALS['__PAYUM_HEARTLAND_MERCHANT_NAME']);
        $paymentDetails->setRequest($request);

        $captureRequest = new CaptureRequest($paymentDetails);
        $payment->execute($captureRequest);

        $statusRequest = new BinaryMaskStatusRequest($captureRequest->getModel());
        $payment->execute($statusRequest);

        /** @var RegisterTokenToAdditionalMerchantResponse $response */
        $response = $statusRequest->getModel()->getResponse();

        $this->assertTrue($statusRequest->isSuccess(), $paymentDetails->getMessages());
    }
}
