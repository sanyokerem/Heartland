<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddAccountToPreAuthorizedPayment
{
    /**
     * AddAccountToPreAuthorizedPaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q69:AddAccountToPreAuthorizedPaymentRequest
     *
     * @var AddAccountToPreAuthorizedPaymentRequest
     */
    protected $AddAccountToPreAuthorizedPaymentRequest = null;

    /**
     * @param AddAccountToPreAuthorizedPaymentRequest $addAccountToPreAuthorizedPaymentRequest
     *
     * @return AddAccountToPreAuthorizedPayment
     */
    public function setAddAccountToPreAuthorizedPaymentRequest(AddAccountToPreAuthorizedPaymentRequest $addAccountToPreAuthorizedPaymentRequest)
    {
        $this->AddAccountToPreAuthorizedPaymentRequest = $addAccountToPreAuthorizedPaymentRequest;

        return $this;
    }

    /**
     * @return AddAccountToPreAuthorizedPaymentRequest
     */
    public function getAddAccountToPreAuthorizedPaymentRequest()
    {
        if (null === $this->AddAccountToPreAuthorizedPaymentRequest) {
            $this->AddAccountToPreAuthorizedPaymentRequest = new AddAccountToPreAuthorizedPaymentRequest();
        }

        return $this->AddAccountToPreAuthorizedPaymentRequest;
    }
}
