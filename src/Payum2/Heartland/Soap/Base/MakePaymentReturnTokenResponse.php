<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class MakePaymentReturnTokenResponse extends MakePaymentResponse
{
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
     * TokenSuccessful
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $TokenSuccessful;

    /**
     * MakePaymentReturnTokenResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q28:MakePaymentReturnTokenResponse
     *
     * @var MakePaymentReturnTokenResponse
     */
    protected $MakePaymentReturnTokenResult = null;

    /**
     * @param string $token
     *
     * @return MakePaymentReturnTokenResponse
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

    /**
     * @param boolean $tokenSuccessful
     *
     * @return MakePaymentReturnTokenResponse
     */
    public function setTokenSuccessful($tokenSuccessful)
    {
        $this->TokenSuccessful = $tokenSuccessful;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTokenSuccessful()
    {
        return $this->TokenSuccessful;
    }

    /**
     * @param MakePaymentReturnTokenResponse $makePaymentReturnTokenResult
     *
     * @return MakePaymentReturnTokenResponse
     */
    public function setMakePaymentReturnTokenResult(MakePaymentReturnTokenResponse $makePaymentReturnTokenResult)
    {
        $this->MakePaymentReturnTokenResult = $makePaymentReturnTokenResult;

        return $this;
    }

    /**
     * @return MakePaymentReturnTokenResponse
     */
    public function getMakePaymentReturnTokenResult()
    {
        if (null === $this->MakePaymentReturnTokenResult) {
            $this->MakePaymentReturnTokenResult = new MakePaymentReturnTokenResponse();
        }

        return $this->MakePaymentReturnTokenResult;
    }
}
