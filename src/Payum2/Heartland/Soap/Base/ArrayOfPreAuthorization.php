<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfPreAuthorization
{
    /**
     * PreAuthorization
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:PreAuthorization
     *
     * @var array(PreAuthorization)
     */
    protected $PreAuthorization = null;

    /**
     * @param array(PreAuthorization) $preAuthorization
     *
     * @return ArrayOfPreAuthorization
     */
    public function setPreAuthorization($preAuthorization)
    {
        $this->PreAuthorization = $preAuthorization;

        return $this;
    }

    /**
     * @return array(PreAuthorization)
     */
    public function getPreAuthorization()
    {
        return $this->PreAuthorization;
    }
}
