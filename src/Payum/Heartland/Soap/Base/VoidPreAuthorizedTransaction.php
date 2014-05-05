<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class VoidPreAuthorizedTransaction
{
    /**
     * VoidPreAuthorizedTransactionRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q73:VoidPreAuthorizedTransactionRequest
     *
     * @var VoidPreAuthorizedTransactionRequest
     */
    protected $VoidPreAuthorizedTransactionRequest = null;

    /**
     * @param VoidPreAuthorizedTransactionRequest $voidPreAuthorizedTransactionRequest
     *
     * @return VoidPreAuthorizedTransaction
     */
    public function setVoidPreAuthorizedTransactionRequest(VoidPreAuthorizedTransactionRequest $voidPreAuthorizedTransactionRequest)
    {
        $this->VoidPreAuthorizedTransactionRequest = $voidPreAuthorizedTransactionRequest;

        return $this;
    }

    /**
     * @return VoidPreAuthorizedTransactionRequest
     */
    public function getVoidPreAuthorizedTransactionRequest()
    {
        if (null === $this->VoidPreAuthorizedTransactionRequest) {
            $this->VoidPreAuthorizedTransactionRequest = new VoidPreAuthorizedTransactionRequest();
        }

        return $this->VoidPreAuthorizedTransactionRequest;
    }
}
