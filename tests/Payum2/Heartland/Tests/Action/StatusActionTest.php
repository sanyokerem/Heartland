<?php
namespace Payum2\Heartland\Tests\Action;

use Payum2\Heartland\Action\StatusAction;
use Payum2\Heartland\Bridge\AuthorizeNet\AuthorizeNetAIM;
use Payum2\Heartland\Model\PaymentDetails;
use Payum2\Bridge\Spl\ArrayObject;
use Payum2\Request\BinaryMaskStatusRequest;
use Payum2\Request\StatusRequestInterface;

class StatusActionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldImplementActionInterface()
    {
        $rc = new \ReflectionClass('Payum2\Heartland\Action\StatusAction');
        
        $this->assertTrue($rc->implementsInterface('Payum2\Action\ActionInterface'));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithoutAnyArguments()   
    {
        new StatusAction();
    }

    /**
     * @test
     */
    public function shouldSupportStatusRequestAndArrayAccessAsModel()
    {
        $action = new StatusAction();

        $request = $this->createStatusRequestStub($this->getMock('ArrayAccess'));

        $this->assertTrue($action->supports($request));
    }

    /**
     * @test
     */
    public function shouldSupportStatusRequestWithPaymentDetailsAsModel()
    {
        $action = new StatusAction();

        $request = $this->createStatusRequestStub(new PaymentDetails);

        $this->assertTrue($action->supports($request));
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
     */
    public function shouldNotSupportStatusRequestAndNotArrayAccessAsModel()
    {
        $action = new StatusAction();

        $request = $this->createStatusRequestStub(new \stdClass());

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
     * @test
     */
    public function shouldMarkNewIfResponseCodeNotSetInModel()
    {
        $action = new StatusAction();

        $request = new BinaryMaskStatusRequest(new ArrayObject());

        $action->execute($request);
        
        $this->assertTrue($request->isNew());
    }

    /**
     * @test
     */
    public function shouldMarkSuccessStatusIfArrayObjectHasResponseCodeApproved()
    {
        $action = new StatusAction();

        $model = new ArrayObject();
        $model['isSuccessful'] = true;

        $request = new BinaryMaskStatusRequest($model);

        $action->execute($request);

        $this->assertTrue($request->isSuccess());
    }

    /**
     * @test
     */
    public function shouldMarkFailedStatusIfArrayObjectHasResponseCodeError()
    {
        $action = new StatusAction();

        $model = new ArrayObject();
        $model['isSuccessful'] = false;

        $request = new BinaryMaskStatusRequest($model);

        $action->execute($request);

        $this->assertTrue($request->isFailed());
    }
    
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|StatusRequestInterface
     */
    protected function createStatusRequestStub($model)
    {
        $status = $this->getMock('Payum2\Request\StatusRequestInterface');

        $status
            ->expects($this->any())
            ->method('getModel')
            ->will($this->returnValue($model))
        ;
        
        return $status;
    }
}
