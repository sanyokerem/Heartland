<?php
namespace Payum2\Heartland\Tests\Model;

use Payum2\Heartland\Model\PaymentDetails;

class PaymentDetailsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldImplementArrayAccessInterface()
    {
        $rc = new \ReflectionClass('Payum2\Heartland\Model\PaymentDetails');
        
        $this->assertTrue($rc->implementsInterface('ArrayAccess'));
    }

    /**
     * @test
     */
    public function shouldImplementIteratorAggregateInterface()
    {
        $rc = new \ReflectionClass('Payum2\Heartland\Model\PaymentDetails');

        $this->assertTrue($rc->implementsInterface('IteratorAggregate'));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithoutAnyArguments()
    {
        new PaymentDetails;
    }

    /**
     * @test
     */
    public function shouldAllowUseAsArray()
    {
        $paymentDetails = new PaymentDetails;

        $paymentDetails['isSuccessful'] = true;
        $paymentDetails['messages'] = 'sdfgsdfgdgf';
        $this->assertEquals('sdfgsdfgdgf', $paymentDetails['messages']);
        $this->assertTrue($paymentDetails->getIsSuccessful());

        $paymentDetails->setAmount('baz');
        $this->assertEquals('baz', $paymentDetails->getAmount());
        $this->assertEquals('baz', $paymentDetails['amount']);
    }

    /**
     * @test
     */
    public function shouldDoNothingIfSetNotSupportedField()
    {
        $paymentDetails = new PaymentDetails;

        $paymentDetails['FOO'] = 'foo';
        
        $this->assertNull($paymentDetails['FOO']);
    }

    /**
     * @test
     */
    public function shouldAllowIterateOverSetFields()
    {
        $paymentDetails = new PaymentDetails;

        $paymentDetails['messages'] = 'foo';
        $paymentDetails->setAmount('baz');
        
        $this->assertEquals(array('messages' => 'foo', 'amount' => 'baz'), iterator_to_array($paymentDetails));
    }
}
