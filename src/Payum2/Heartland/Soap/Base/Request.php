<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Request
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
     * - SchemaType: tns:Credentials
     *
     * @var Credentials
     */
    protected $Credential = null;

    /**
     * @param int $bollettaVersion
     *
     * @return Request
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
     * @param Credentials $credential
     *
     * @return Request
     */
    public function setCredential(Credentials $credential)
    {
        $this->Credential = $credential;

        return $this;
    }

    /**
     * @return Credentials
     */
    public function getCredential()
    {
        if (null === $this->Credential) {
            $this->Credential = new Credentials();
        }

        return $this->Credential;
    }
}
