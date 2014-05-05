<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class VoidPreAuthorizedTransactionByOrderID
{
    /**
     * VoidPreAuthorizedTransactionByOrderIDRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q83:VoidPreAuthorizedTransactionByOrderIDRequest
     *
     * @var VoidPreAuthorizedTransactionByOrderIDRequest
     */
    protected $VoidPreAuthorizedTransactionByOrderIDRequest = null;

    /**
     * @param VoidPreAuthorizedTransactionByOrderIDRequest $voidPreAuthorizedTransactionByOrderIDRequest
     *
     * @return VoidPreAuthorizedTransactionByOrderID
     */
    public function setVoidPreAuthorizedTransactionByOrderIDRequest(VoidPreAuthorizedTransactionByOrderIDRequest $voidPreAuthorizedTransactionByOrderIDRequest)
    {
        $this->VoidPreAuthorizedTransactionByOrderIDRequest = $voidPreAuthorizedTransactionByOrderIDRequest;

        return $this;
    }

    /**
     * @return VoidPreAuthorizedTransactionByOrderIDRequest
     */
    public function getVoidPreAuthorizedTransactionByOrderIDRequest()
    {
        if (null === $this->VoidPreAuthorizedTransactionByOrderIDRequest) {
            $this->VoidPreAuthorizedTransactionByOrderIDRequest = new VoidPreAuthorizedTransactionByOrderIDRequest();
        }

        return $this->VoidPreAuthorizedTransactionByOrderIDRequest;
    }
}
