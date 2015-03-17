<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetTokenResponse extends Response
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
     * GetTokenResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q42:GetTokenResponse
     *
     * @var GetTokenResponse
     */
    protected $GetTokenResult = null;

    /**
     * @param string $token
     *
     * @return GetTokenResponse
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
     * @param GetTokenResponse $getTokenResult
     *
     * @return GetTokenResponse
     */
    public function setGetTokenResult(GetTokenResponse $getTokenResult)
    {
        $this->GetTokenResult = $getTokenResult;

        return $this;
    }

    /**
     * @return GetTokenResponse
     */
    public function getGetTokenResult()
    {
        if (null === $this->GetTokenResult) {
            $this->GetTokenResult = new GetTokenResponse();
        }

        return $this->GetTokenResult;
    }
}
