<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class CapturePreAuthorizedPayment
{
    /**
     * CapturePreAuthorizedPaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q61:CapturePreAuthorizedPaymentRequest
     *
     * @var CapturePreAuthorizedPaymentRequest
     */
    protected $CapturePreAuthorizedPaymentRequest = null;

    /**
     * @param CapturePreAuthorizedPaymentRequest $capturePreAuthorizedPaymentRequest
     *
     * @return CapturePreAuthorizedPayment
     */
    public function setCapturePreAuthorizedPaymentRequest(CapturePreAuthorizedPaymentRequest $capturePreAuthorizedPaymentRequest)
    {
        $this->CapturePreAuthorizedPaymentRequest = $capturePreAuthorizedPaymentRequest;

        return $this;
    }

    /**
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function getCapturePreAuthorizedPaymentRequest()
    {
        if (null === $this->CapturePreAuthorizedPaymentRequest) {
            $this->CapturePreAuthorizedPaymentRequest = new CapturePreAuthorizedPaymentRequest();
        }

        return $this->CapturePreAuthorizedPaymentRequest;
    }
}
