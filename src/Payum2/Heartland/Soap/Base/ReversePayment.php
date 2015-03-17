<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ReversePayment
{
    /**
     * ReversePaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q31:ReversePaymentRequest
     *
     * @var ReversePaymentRequest
     */
    protected $ReversePaymentRequest = null;

    /**
     * @param ReversePaymentRequest $reversePaymentRequest
     *
     * @return ReversePayment
     */
    public function setReversePaymentRequest(ReversePaymentRequest $reversePaymentRequest)
    {
        $this->ReversePaymentRequest = $reversePaymentRequest;

        return $this;
    }

    /**
     * @return ReversePaymentRequest
     */
    public function getReversePaymentRequest()
    {
        if (null === $this->ReversePaymentRequest) {
            $this->ReversePaymentRequest = new ReversePaymentRequest();
        }

        return $this->ReversePaymentRequest;
    }
}
