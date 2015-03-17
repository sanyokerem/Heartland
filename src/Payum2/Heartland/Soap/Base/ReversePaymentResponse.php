<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ReversePaymentResponse extends GetFileResponse
{
    /**
     * ReversalTransactionWithReversalAuthorizations
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReversalTransactionRecordWithReversalAuthorizations
     *
     * @var ReversalTransactionRecordWithReversalAuthorizations
     */
    protected $ReversalTransactionWithReversalAuthorizations = null;

    /**
     * ReversePaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q32:ReversePaymentResponse
     *
     * @var ReversePaymentResponse
     */
    protected $ReversePaymentResult = null;

    /**
     * @param ReversalTransactionRecordWithReversalAuthorizations $reversalTransactionWithReversalAuthorizations
     *
     * @return ReversePaymentResponse
     */
    public function setReversalTransactionWithReversalAuthorizations(ReversalTransactionRecordWithReversalAuthorizations $reversalTransactionWithReversalAuthorizations)
    {
        $this->ReversalTransactionWithReversalAuthorizations = $reversalTransactionWithReversalAuthorizations;

        return $this;
    }

    /**
     * @return ReversalTransactionRecordWithReversalAuthorizations
     */
    public function getReversalTransactionWithReversalAuthorizations()
    {
        if (null === $this->ReversalTransactionWithReversalAuthorizations) {
            $this->ReversalTransactionWithReversalAuthorizations = new ReversalTransactionRecordWithReversalAuthorizations();
        }

        return $this->ReversalTransactionWithReversalAuthorizations;
    }

    /**
     * @param ReversePaymentResponse $reversePaymentResult
     *
     * @return ReversePaymentResponse
     */
    public function setReversePaymentResult(ReversePaymentResponse $reversePaymentResult)
    {
        $this->ReversePaymentResult = $reversePaymentResult;

        return $this;
    }

    /**
     * @return ReversePaymentResponse
     */
    public function getReversePaymentResult()
    {
        if (null === $this->ReversePaymentResult) {
            $this->ReversePaymentResult = new ReversePaymentResponse();
        }

        return $this->ReversePaymentResult;
    }
}
