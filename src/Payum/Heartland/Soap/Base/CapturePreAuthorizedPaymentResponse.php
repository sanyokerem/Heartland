<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class CapturePreAuthorizedPaymentResponse
{
    /**
     * CapturePreAuthorizedPaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q62:MakePaymentResponse
     *
     * @var MakePaymentResponse
     */
    protected $CapturePreAuthorizedPaymentResult = null;

    /**
     * @param MakePaymentResponse $capturePreAuthorizedPaymentResult
     *
     * @return CapturePreAuthorizedPaymentResponse
     */
    public function setCapturePreAuthorizedPaymentResult(MakePaymentResponse $capturePreAuthorizedPaymentResult)
    {
        $this->CapturePreAuthorizedPaymentResult = $capturePreAuthorizedPaymentResult;

        return $this;
    }

    /**
     * @return MakePaymentResponse
     */
    public function getCapturePreAuthorizedPaymentResult()
    {
        if (null === $this->CapturePreAuthorizedPaymentResult) {
            $this->CapturePreAuthorizedPaymentResult = new MakePaymentResponse();
        }

        return $this->CapturePreAuthorizedPaymentResult;
    }
}
