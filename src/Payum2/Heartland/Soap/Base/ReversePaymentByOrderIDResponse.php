<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ReversePaymentByOrderIDResponse extends ReversePaymentResponse
{
    /**
     * ReversalType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ReversalType = null;

    /**
     * ReversePaymentByOrderIDResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q82:ReversePaymentByOrderIDResponse
     *
     * @var ReversePaymentByOrderIDResponse
     */
    protected $ReversePaymentByOrderIDResult = null;

    /**
     * @param string $reversalType
     *
     * @return ReversePaymentByOrderIDResponse
     */
    public function setReversalType($reversalType)
    {
        $this->ReversalType = $reversalType;

        return $this;
    }

    /**
     * @return string
     */
    public function getReversalType()
    {
        return $this->ReversalType;
    }

    /**
     * @param ReversePaymentByOrderIDResponse $reversePaymentByOrderIDResult
     *
     * @return ReversePaymentByOrderIDResponse
     */
    public function setReversePaymentByOrderIDResult(ReversePaymentByOrderIDResponse $reversePaymentByOrderIDResult)
    {
        $this->ReversePaymentByOrderIDResult = $reversePaymentByOrderIDResult;

        return $this;
    }

    /**
     * @return ReversePaymentByOrderIDResponse
     */
    public function getReversePaymentByOrderIDResult()
    {
        if (null === $this->ReversePaymentByOrderIDResult) {
            $this->ReversePaymentByOrderIDResult = new ReversePaymentByOrderIDResponse();
        }

        return $this->ReversePaymentByOrderIDResult;
    }
}
