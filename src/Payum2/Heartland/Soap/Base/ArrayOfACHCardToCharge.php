<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfACHCardToCharge
{
    /**
     * ACHCardToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ACHCardToCharge
     *
     * @var array(ACHCardToCharge)
     */
    protected $ACHCardToCharge = null;

    /**
     * @param array(ACHCardToCharge) $aCHCardToCharge
     *
     * @return ArrayOfACHCardToCharge
     */
    public function setACHCardToCharge($aCHCardToCharge)
    {
        $this->ACHCardToCharge = $aCHCardToCharge;

        return $this;
    }

    /**
     * @return array(ACHCardToCharge)
     */
    public function getACHCardToCharge()
    {
        return $this->ACHCardToCharge;
    }
}
