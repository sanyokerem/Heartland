<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddBlindPayment
{
    /**
     * AddBlindPaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q1:AddBlindPaymentRequest
     *
     * @var AddBlindPaymentRequest
     */
    protected $AddBlindPaymentRequest = null;

    /**
     * @param AddBlindPaymentRequest $addBlindPaymentRequest
     *
     * @return AddBlindPayment
     */
    public function setAddBlindPaymentRequest(AddBlindPaymentRequest $addBlindPaymentRequest)
    {
        $this->AddBlindPaymentRequest = $addBlindPaymentRequest;

        return $this;
    }

    /**
     * @return AddBlindPaymentRequest
     */
    public function getAddBlindPaymentRequest()
    {
        if (null === $this->AddBlindPaymentRequest) {
            $this->AddBlindPaymentRequest = new AddBlindPaymentRequest();
        }

        return $this->AddBlindPaymentRequest;
    }
}
