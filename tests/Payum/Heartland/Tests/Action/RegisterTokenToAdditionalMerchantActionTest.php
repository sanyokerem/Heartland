<?php
namespace Payum\Heartland\Tests\Action;

use Payum\Heartland\Action\RegisterTokenToAdditionalMerchantAction;
use Payum\Heartland\Action\StatusAction;
use Payum\Heartland\Soap\Base\RegisterTokenToAdditionalMerchantRequest;
use Payum\Request\CaptureRequest;
use Payum\Heartland\Model\PaymentDetails;
use Payum\Bridge\Spl\ArrayObject;
use Payum\Request\BinaryMaskStatusRequest;
use Payum\Request\StatusRequestInterface;

class RegisterTokenToAdditionalMerchantActionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldImplementActionInterface()
    {
        $rc = new \ReflectionClass('Payum\Heartland\Action\RegisterTokenToAdditionalMerchantAction');

        $this->assertTrue($rc->implementsInterface('Payum\Action\ActionInterface'));
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
     * @expectedException \Payum\Exception\RequestNotSupportedException
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
        $status = $this->getMock('Payum\Request\CaptureRequest', array(), array($model));

        $status
            ->expects($this->any())
            ->method('getModel')
            ->will($this->returnValue($model))
        ;

        return $status;
    }
}
