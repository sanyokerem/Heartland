<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ChangePasswordRequest extends UserGroupRequest
{
    /**
     * NewPassword
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $NewPassword = null;

    /**
     * @param string $newPassword
     *
     * @return ChangePasswordRequest
     */
    public function setNewPassword($newPassword)
    {
        $this->NewPassword = $newPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->NewPassword;
    }
}
