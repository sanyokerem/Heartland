<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfE3DebitCardWithPINToCharge
{
    /**
     * E3DebitCardWithPINToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:E3DebitCardWithPINToCharge
     *
     * @var array(E3DebitCardWithPINToCharge)
     */
    protected $E3DebitCardWithPINToCharge = null;

    /**
     * @param array(E3DebitCardWithPINToCharge) $e3DebitCardWithPINToCharge
     *
     * @return ArrayOfE3DebitCardWithPINToCharge
     */
    public function setE3DebitCardWithPINToCharge($e3DebitCardWithPINToCharge)
    {
        $this->E3DebitCardWithPINToCharge = $e3DebitCardWithPINToCharge;

        return $this;
    }

    /**
     * @return array(E3DebitCardWithPINToCharge)
     */
    public function getE3DebitCardWithPINToCharge()
    {
        return $this->E3DebitCardWithPINToCharge;
    }
}
