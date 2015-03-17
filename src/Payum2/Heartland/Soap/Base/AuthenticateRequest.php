<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AuthenticateRequest
{
    /**
     * ApplicationID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ApplicationID = null;

    /**
     * MacAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MacAddress = null;

    /**
     * Password
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Password = null;

    /**
     * UserName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $UserName = null;

    /**
     * @param int $applicationID
     *
     * @return AuthenticateRequest
     */
    public function setApplicationID($applicationID)
    {
        $this->ApplicationID = $applicationID;

        return $this;
    }

    /**
     * @return int
     */
    public function getApplicationID()
    {
        return $this->ApplicationID;
    }

    /**
     * @param string $macAddress
     *
     * @return AuthenticateRequest
     */
    public function setMacAddress($macAddress)
    {
        $this->MacAddress = $macAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getMacAddress()
    {
        return $this->MacAddress;
    }

    /**
     * @param string $password
     *
     * @return AuthenticateRequest
     */
    public function setPassword($password)
    {
        $this->Password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $userName
     *
     * @return AuthenticateRequest
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }
}
