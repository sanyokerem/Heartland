<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ReversePaymentByOrderID
{
    /**
     * ReversePaymentByOrderIDRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q81:ReversePaymentByOrderIDRequest
     *
     * @var ReversePaymentByOrderIDRequest
     */
    protected $ReversePaymentByOrderIDRequest = null;

    /**
     * @param ReversePaymentByOrderIDRequest $reversePaymentByOrderIDRequest
     *
     * @return ReversePaymentByOrderID
     */
    public function setReversePaymentByOrderIDRequest(ReversePaymentByOrderIDRequest $reversePaymentByOrderIDRequest)
    {
        $this->ReversePaymentByOrderIDRequest = $reversePaymentByOrderIDRequest;

        return $this;
    }

    /**
     * @return ReversePaymentByOrderIDRequest
     */
    public function getReversePaymentByOrderIDRequest()
    {
        if (null === $this->ReversePaymentByOrderIDRequest) {
            $this->ReversePaymentByOrderIDRequest = new ReversePaymentByOrderIDRequest();
        }

        return $this->ReversePaymentByOrderIDRequest;
    }
}
