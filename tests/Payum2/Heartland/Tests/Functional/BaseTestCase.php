<?php
namespace Payum2\Heartland\Tests\Functional;

use Payum2\Heartland\PaymentFactory;
use Payum2\Heartland\Api;

abstract class BaseTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Api
     */
    protected $api;

    protected function getPayment()
    {
        if (false == isset($GLOBALS['__PAYUM_HEARTLAND_APPLICATION_ID'])) {
            $this->markTestSkipped('Please configure __PAYUM_HEARTLAND_APPLICATION_ID in your phpunit.xml');
        }
        if (false == isset($GLOBALS['__PAYUM_HEARTLAND_USERNAME'])) {
            $this->markTestSkipped('Please configure __PAYUM_HEARTLAND_USERNAME in your phpunit.xml');
        }
        if (false == isset($GLOBALS['__PAYUM_HEARTLAND_PASSWORD'])) {
            $this->markTestSkipped('Please configure __PAYUM_HEARTLAND_PASSWORD in your phpunit.xml');
        }

        if (false == isset($GLOBALS['__PAYUM_HEARTLAND_MERCHANT_NAME'])) {
            $this->markTestSkipped('Please configure __PAYUM_HEARTLAND_MERCHANT_NAME in your phpunit.xml');
        }

        $this->api = new Api(
            array(
                'env' => 'testing',
                'application_id' => $GLOBALS['__PAYUM_HEARTLAND_APPLICATION_ID'],
                'username' => $GLOBALS['__PAYUM_HEARTLAND_USERNAME'],
                'password' => $GLOBALS['__PAYUM_HEARTLAND_PASSWORD'],
            )
        );

        return PaymentFactory::create($this->api);
    }
}
