<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class E3DebitCardWithPINToCharge extends CardToCharge
{
    /**
     * E3DebitCardWithPIN
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q7:E3DebitCardWithPINData
     *
     * @var E3DebitCardWithPINData
     */
    protected $E3DebitCardWithPIN = null;

    /**
     * @param E3DebitCardWithPINData $e3DebitCardWithPIN
     *
     * @return E3DebitCardWithPINToCharge
     */
    public function setE3DebitCardWithPIN(E3DebitCardWithPINData $e3DebitCardWithPIN)
    {
        $this->E3DebitCardWithPIN = $e3DebitCardWithPIN;

        return $this;
    }

    /**
     * @return E3DebitCardWithPINData
     */
    public function getE3DebitCardWithPIN()
    {
        if (null === $this->E3DebitCardWithPIN) {
            $this->E3DebitCardWithPIN = new E3DebitCardWithPINData();
        }

        return $this->E3DebitCardWithPIN;
    }
}
