<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfClearTextCardToCharge
{
    /**
     * ClearTextCardToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ClearTextCardToCharge
     *
     * @var array(ClearTextCardToCharge)
     */
    protected $ClearTextCardToCharge = null;

    /**
     * @param array(ClearTextCardToCharge) $clearTextCardToCharge
     *
     * @return ArrayOfClearTextCardToCharge
     */
    public function setClearTextCardToCharge($clearTextCardToCharge)
    {
        $this->ClearTextCardToCharge = $clearTextCardToCharge;

        return $this;
    }

    /**
     * @return array(ClearTextCardToCharge)
     */
    public function getClearTextCardToCharge()
    {
        return $this->ClearTextCardToCharge;
    }
}
