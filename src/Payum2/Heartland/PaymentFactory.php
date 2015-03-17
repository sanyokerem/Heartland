<?php
namespace Payum2\Heartland;

use Payum2\Payment;
use Payum2\Heartland\Api;
use Payum2\Heartland\Action\MakeBlindPaymentAction;
use Payum2\Heartland\Action\GetTokenAction;
use Payum2\Heartland\Action\StatusAction;
use Payum2\Heartland\Action\RegisterTokenToAdditionalMerchantAction;

abstract class PaymentFactory
{
    /**
     * @param Api $api
     *
     * @return Payment
     */
    public static function create(Api $api)
    {
        $payment = new Payment;

        $payment->addApi($api);
//
        $payment->addAction(new MakeBlindPaymentAction);
        $payment->addAction(new GetTokenAction);
        $payment->addAction(new StatusAction);
        $payment->addAction(new RegisterTokenToAdditionalMerchantAction);

        return $payment;
    }

    /**
     */
    private function __construct()
    {
    }
}
