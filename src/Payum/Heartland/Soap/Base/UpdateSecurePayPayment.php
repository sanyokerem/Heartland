<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class UpdateSecurePayPayment
{
    /**
     * request
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q55:UpdateSecurePayPaymentRequest
     *
     * @var UpdateSecurePayPaymentRequest
     */
    protected $request = null;

    /**
     * @param UpdateSecurePayPaymentRequest $request
     *
     * @return UpdateSecurePayPayment
     */
    public function setRequest(UpdateSecurePayPaymentRequest $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return UpdateSecurePayPaymentRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new UpdateSecurePayPaymentRequest();
        }

        return $this->request;
    }
}
