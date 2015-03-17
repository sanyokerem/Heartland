<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class RemovePreAuthorizedAccountRequest extends MerchantRequest
{
    /**
     * PreAuthorizationAccount_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $PreAuthorizationAccount_ID;

    /**
     * PreAuthorizedTransaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $PreAuthorizedTransaction_ID;

    /**
     * @param int $preAuthorizationAccount_ID
     *
     * @return RemovePreAuthorizedAccountRequest
     */
    public function setPreAuthorizationAccount_ID($preAuthorizationAccount_ID)
    {
        $this->PreAuthorizationAccount_ID = $preAuthorizationAccount_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreAuthorizationAccount_ID()
    {
        return $this->PreAuthorizationAccount_ID;
    }

    /**
     * @param int $preAuthorizedTransaction_ID
     *
     * @return RemovePreAuthorizedAccountRequest
     */
    public function setPreAuthorizedTransaction_ID($preAuthorizedTransaction_ID)
    {
        $this->PreAuthorizedTransaction_ID = $preAuthorizedTransaction_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreAuthorizedTransaction_ID()
    {
        return $this->PreAuthorizedTransaction_ID;
    }
}
