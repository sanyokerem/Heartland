<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfTokenToCharge
{
    /**
     * TokenToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TokenToCharge
     *
     * @var array(TokenToCharge)
     */
    protected $TokenToCharge = null;

    /**
     * @param array(TokenToCharge) $tokenToCharge
     *
     * @return ArrayOfTokenToCharge
     */
    public function setTokenToCharge($tokenToCharge)
    {
        $this->TokenToCharge = $tokenToCharge;

        return $this;
    }

    /**
     * @return array(TokenToCharge)
     */
    public function getTokenToCharge()
    {
        return $this->TokenToCharge;
    }
}
