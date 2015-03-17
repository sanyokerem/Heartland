<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class RegisterTokenToAdditionalMerchantRequest extends MerchantRequest
{
    /**
     * RegisterToMerchantCredential
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:MerchantCredentials
     *
     * @var MerchantCredentials
     */
    protected $RegisterToMerchantCredential = null;

    /**
     * Token
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Token = null;

    /**
     * @param MerchantCredentials $registerToMerchantCredential
     *
     * @return RegisterTokenToAdditionalMerchantRequest
     */
    public function setRegisterToMerchantCredential(MerchantCredentials $registerToMerchantCredential)
    {
        $this->RegisterToMerchantCredential = $registerToMerchantCredential;

        return $this;
    }

    /**
     * @return MerchantCredentials
     */
    public function getRegisterToMerchantCredential()
    {
        if (null === $this->RegisterToMerchantCredential) {
            $this->RegisterToMerchantCredential = new MerchantCredentials();
        }

        return $this->RegisterToMerchantCredential;
    }

    /**
     * @param string $token
     *
     * @return RegisterTokenToAdditionalMerchantRequest
     */
    public function setToken($token)
    {
        $this->Token = $token;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }
}
