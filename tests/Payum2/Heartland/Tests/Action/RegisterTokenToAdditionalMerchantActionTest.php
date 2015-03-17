<?php
namespace Payum2\Heartland\Tests\Action;

use Payum2\Heartland\Action\RegisterTokenToAdditionalMerchantAction;
use Payum2\Heartland\Action\StatusAction;
use Payum2\Heartland\Soap\Base\RegisterTokenToAdditionalMerchantRequest;
use Payum2\Request\CaptureRequest;
use Payum2\Heartland\Model\PaymentDetails;
use Payum2\Bridge\Spl\ArrayObject;
use Payum2\Request\BinaryMaskStatusRequest;
use Payum2\Request\StatusRequestInterface;

class RegisterTokenToAdditionalMerchantActionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldImplementActionInterface()
    {
        $rc = new \ReflectionClass('Payum2\Heartland\Action\RegisterTokenToAdditionalMerchantAction');

        $this->assertTrue($rc->implementsInterface('Payum2\Action\ActionInterface'));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithoutAnyArguments()
    {
        new RegisterTokenToAdditionalMerchantAction();
    }

    /**
     * @test
     */
    public function shouldSupportProperRequest()
    {
        $action = new RegisterTokenToAdditionalMerchantAction();
        $request = new RegisterTokenToAdditionalMerchantRequest();
        $paymentDetails = new PaymentDetails();
        $captureRequest = new CaptureRequest($paymentDetails);
        $action->supports($captureRequest);
    }

    /**
     * @test
     */
    public function shouldNotSupportNotStatusRequest()
    {
        $action = new StatusAction();
        $request = new \stdClass();
        $this->assertFalse($action->supports($request));
    }

    /**
     * @test
     *
     * @expectedException \Payum2\Exception\RequestNotSupportedException
     */
    public function throwIfNotSupportedRequestGivenAsArgumentForExecute()
    {
        $action = new StatusAction();
        $action->execute(new \stdClass());
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|StatusRequestInterface
     */
    protected function createRegisterTokenToAdditionalMerchantRequestStub($model, $request)
    {
        $status = $this->getMock('Payum2\Request\CaptureRequest', array(), array($model));

        $status
            ->expects($this->any())
            ->method('getModel')
            ->will($this->returnValue($model))
        ;

        return $status;
    }
}
