<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfACHAccountToCharge
{
    /**
     * ACHAccountToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ACHAccountToCharge
     *
     * @var array(ACHAccountToCharge)
     */
    protected $ACHAccountToCharge = null;

    /**
     * @param array(ACHAccountToCharge) $aCHAccountToCharge
     *
     * @return ArrayOfACHAccountToCharge
     */
    public function setACHAccountToCharge($aCHAccountToCharge)
    {
        $this->ACHAccountToCharge = $aCHAccountToCharge;

        return $this;
    }

    /**
     * @return array(ACHAccountToCharge)
     */
    public function getACHAccountToCharge()
    {
        return $this->ACHAccountToCharge;
    }
}
