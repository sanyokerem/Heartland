<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfAESCardToCharge
{
    /**
     * AESCardToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:AESCardToCharge
     *
     * @var array(AESCardToCharge)
     */
    protected $AESCardToCharge = null;

    /**
     * @param array(AESCardToCharge) $aESCardToCharge
     *
     * @return ArrayOfAESCardToCharge
     */
    public function setAESCardToCharge($aESCardToCharge)
    {
        $this->AESCardToCharge = $aESCardToCharge;

        return $this;
    }

    /**
     * @return array(AESCardToCharge)
     */
    public function getAESCardToCharge()
    {
        return $this->AESCardToCharge;
    }
}
