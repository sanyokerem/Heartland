<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class VoidPreAuthorizedTransactionRequest extends MerchantRequest
{
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
     * @param int $preAuthorizedTransaction_ID
     *
     * @return VoidPreAuthorizedTransactionRequest
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
