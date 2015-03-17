<?php
namespace Payum2\Heartland\Tests;

use Payum2\Heartland\PaymentFactory;

class PaymentFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function couldNotBeInstantiated()
    {
        $rc = new \ReflectionClass('Payum2\Heartland\PaymentFactory');

        $this->assertFalse($rc->isInstantiable());
    }

    /**
     * @test
     */
    public function shouldAllowCreatePaymentWithStandardActionsAdded()
    {
        $apiMock = $this->createApiMock();

        $payment = PaymentFactory::create($apiMock);

        $this->assertInstanceOf('Payum2\Payment', $payment);

        $this->assertAttributeCount(1, 'apis', $payment);

        $actions = $this->readAttribute($payment, 'actions');
        $this->assertInternalType('array', $actions);
        $this->assertNotEmpty($actions);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject | \Payum2\Heartland\Api
     */
    protected function createApiMock()
    {
        return $this->getMock('Payum2\Heartland\Api', array(), array(), '', false);
    }
}
