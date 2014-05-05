<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddAccountToPreAuthorizedPaymentResponse extends PreAuthorizePaymentResponse
{
    /**
     * AddAccountToPreAuthorizedPaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q70:AddAccountToPreAuthorizedPaymentResponse
     *
     * @var AddAccountToPreAuthorizedPaymentResponse
     */
    protected $AddAccountToPreAuthorizedPaymentResult = null;

    /**
     * @param AddAccountToPreAuthorizedPaymentResponse $addAccountToPreAuthorizedPaymentResult
     *
     * @return AddAccountToPreAuthorizedPaymentResponse
     */
    public function setAddAccountToPreAuthorizedPaymentResult($addAccountToPreAuthorizedPaymentResult)
    {
        $this->AddAccountToPreAuthorizedPaymentResult = $addAccountToPreAuthorizedPaymentResult;

        return $this;
    }

    /**
     * @return AddAccountToPreAuthorizedPaymentResponse
     */
    public function getAddAccountToPreAuthorizedPaymentResult()
    {
        return $this->AddAccountToPreAuthorizedPaymentResult;
    }
}
