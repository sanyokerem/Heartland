<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ReversePaymentReturnReversalTypeResponse
{
    /**
     * ReversePaymentReturnReversalTypeResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q34:ReversePaymentWithReversalTypeResponse
     *
     * @var ReversePaymentWithReversalTypeResponse
     */
    protected $ReversePaymentReturnReversalTypeResult = null;

    /**
     * @param ReversePaymentWithReversalTypeResponse $reversePaymentReturnReversalTypeResult
     *
     * @return ReversePaymentReturnReversalTypeResponse
     */
    public function setReversePaymentReturnReversalTypeResult(ReversePaymentWithReversalTypeResponse $reversePaymentReturnReversalTypeResult)
    {
        $this->ReversePaymentReturnReversalTypeResult = $reversePaymentReturnReversalTypeResult;

        return $this;
    }

    /**
     * @return ReversePaymentWithReversalTypeResponse
     */
    public function getReversePaymentReturnReversalTypeResult()
    {
        if (null === $this->ReversePaymentReturnReversalTypeResult) {
            $this->ReversePaymentReturnReversalTypeResult = new ReversePaymentWithReversalTypeResponse();
        }

        return $this->ReversePaymentReturnReversalTypeResult;
    }
}
