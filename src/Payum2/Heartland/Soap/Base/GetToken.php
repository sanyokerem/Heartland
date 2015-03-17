<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetToken
{
    /**
     * GetTokenRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q41:GetTokenRequest
     *
     * @var GetTokenRequest
     */
    protected $GetTokenRequest = null;

    /**
     * @param GetTokenRequest $getTokenRequest
     *
     * @return GetToken
     */
    public function setGetTokenRequest(GetTokenRequest $getTokenRequest)
    {
        $this->GetTokenRequest = $getTokenRequest;

        return $this;
    }

    /**
     * @return GetTokenRequest
     */
    public function getGetTokenRequest()
    {
        if (null === $this->GetTokenRequest) {
            $this->GetTokenRequest = new GetTokenRequest();
        }

        return $this->GetTokenRequest;
    }
}
