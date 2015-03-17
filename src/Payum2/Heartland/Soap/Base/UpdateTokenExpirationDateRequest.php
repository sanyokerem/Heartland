<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class UpdateTokenExpirationDateRequest extends MerchantRequest
{
    /**
     * ExpirationMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ExpirationMonth;

    /**
     * ExpirationYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ExpirationYear;

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
     * @param int $expirationMonth
     *
     * @return UpdateTokenExpirationDateRequest
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->ExpirationMonth = $expirationMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->ExpirationMonth;
    }

    /**
     * @param int $expirationYear
     *
     * @return UpdateTokenExpirationDateRequest
     */
    public function setExpirationYear($expirationYear)
    {
        $this->ExpirationYear = $expirationYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->ExpirationYear;
    }

    /**
     * @param string $token
     *
     * @return UpdateTokenExpirationDateRequest
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
