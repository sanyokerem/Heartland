<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class UserGroupRequest
{
    /**
     * Credential
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:UserGroupCredentials
     *
     * @var UserGroupCredentials
     */
    protected $Credential = null;

    /**
     * @param UserGroupCredentials $credential
     *
     * @return UserGroupRequest
     */
    public function setCredential(UserGroupCredentials $credential)
    {
        $this->Credential = $credential;

        return $this;
    }

    /**
     * @return UserGroupCredentials
     */
    public function getCredential()
    {
        if (null === $this->Credential) {
            $this->Credential = new UserGroupCredentials();
        }

        return $this->Credential;
    }
}
