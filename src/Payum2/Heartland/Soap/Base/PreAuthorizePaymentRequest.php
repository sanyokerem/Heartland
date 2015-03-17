<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class PreAuthorizePaymentRequest extends PreAuthorizeAccountRequest
{
    /**
     * PreAuthorizationLengthInMinutes
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $PreAuthorizationLengthInMinutes;

    /**
     * @param int $preAuthorizationLengthInMinutes
     *
     * @return PreAuthorizePaymentRequest
     */
    public function setPreAuthorizationLengthInMinutes($preAuthorizationLengthInMinutes)
    {
        $this->PreAuthorizationLengthInMinutes = $preAuthorizationLengthInMinutes;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreAuthorizationLengthInMinutes()
    {
        return $this->PreAuthorizationLengthInMinutes;
    }
}
