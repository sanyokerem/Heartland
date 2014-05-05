<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class VoidPreAuthorizedTransactionResponse extends Response
{
    /**
     * VoidPreAuthorizedTransactionResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q74:VoidPreAuthorizedTransactionResponse
     *
     * @var VoidPreAuthorizedTransactionResponse
     */
    protected $VoidPreAuthorizedTransactionResult = null;

    /**
     * @param VoidPreAuthorizedTransactionResponse $voidPreAuthorizedTransactionResult
     *
     * @return VoidPreAuthorizedTransactionResponse
     */
    public function setVoidPreAuthorizedTransactionResult($voidPreAuthorizedTransactionResult)
    {
        $this->VoidPreAuthorizedTransactionResult = $voidPreAuthorizedTransactionResult;

        return $this;
    }

    /**
     * @return VoidPreAuthorizedTransactionResponse
     */
    public function getVoidPreAuthorizedTransactionResult()
    {
        return $this->VoidPreAuthorizedTransactionResult;
    }
}
