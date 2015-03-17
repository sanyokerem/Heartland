<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddPayment
{
    /**
     * AddPaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q3:AddPaymentRequest
     *
     * @var AddPaymentRequest
     */
    protected $AddPaymentRequest = null;

    /**
     * @param AddPaymentRequest $addPaymentRequest
     *
     * @return AddPayment
     */
    public function setAddPaymentRequest(AddPaymentRequest $addPaymentRequest)
    {
        $this->AddPaymentRequest = $addPaymentRequest;

        return $this;
    }

    /**
     * @return AddPaymentRequest
     */
    public function getAddPaymentRequest()
    {
        if (null === $this->AddPaymentRequest) {
            $this->AddPaymentRequest = new AddPaymentRequest();
        }

        return $this->AddPaymentRequest;
    }
}
