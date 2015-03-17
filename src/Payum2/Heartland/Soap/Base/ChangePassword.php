<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ChangePassword
{
    /**
     * ChangePasswordRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q9:ChangePasswordRequest
     *
     * @var ChangePasswordRequest
     */
    protected $ChangePasswordRequest = null;

    /**
     * @param ChangePasswordRequest $changePasswordRequest
     *
     * @return ChangePassword
     */
    public function setChangePasswordRequest(ChangePasswordRequest $changePasswordRequest)
    {
        $this->ChangePasswordRequest = $changePasswordRequest;

        return $this;
    }

    /**
     * @return ChangePasswordRequest
     */
    public function getChangePasswordRequest()
    {
        if (null === $this->ChangePasswordRequest) {
            $this->ChangePasswordRequest = new ChangePasswordRequest();
        }

        return $this->ChangePasswordRequest;
    }
}
