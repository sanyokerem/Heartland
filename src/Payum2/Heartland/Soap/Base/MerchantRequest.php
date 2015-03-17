<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class MerchantRequest
{
    /**
     * BollettaVersion
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $BollettaVersion;

    /**
     * Credential
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:MerchantCredentials
     *
     * @var MerchantCredentials
     */
    protected $Credential = null;

    /**
     * @param int $bollettaVersion
     *
     * @return MerchantRequest
     */
    public function setBollettaVersion($bollettaVersion)
    {
        $this->BollettaVersion = $bollettaVersion;

        return $this;
    }

    /**
     * @return int
     */
    public function getBollettaVersion()
    {
        return $this->BollettaVersion;
    }

    /**
     * @param MerchantCredentials $credential
     *
     * @return MerchantRequest
     */
    public function setCredential(MerchantCredentials $credential)
    {
        $this->Credential = $credential;

        return $this;
    }

    /**
     * @return MerchantCredentials
     */
    public function getCredential()
    {
        if (null === $this->Credential) {
            $this->Credential = new MerchantCredentials();
        }

        return $this->Credential;
    }
}
