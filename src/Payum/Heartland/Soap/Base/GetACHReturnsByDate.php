<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetACHReturnsByDate
{
    /**
     * GetACHReturnsByDateRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q71:GetACHReturnsByDateRequest
     *
     * @var GetACHReturnsByDateRequest
     */
    protected $GetACHReturnsByDateRequest = null;

    /**
     * @param GetACHReturnsByDateRequest $getACHReturnsByDateRequest
     *
     * @return GetACHReturnsByDate
     */
    public function setGetACHReturnsByDateRequest(GetACHReturnsByDateRequest $getACHReturnsByDateRequest)
    {
        $this->GetACHReturnsByDateRequest = $getACHReturnsByDateRequest;

        return $this;
    }

    /**
     * @return GetACHReturnsByDateRequest
     */
    public function getGetACHReturnsByDateRequest()
    {
        if (null === $this->GetACHReturnsByDateRequest) {
            $this->GetACHReturnsByDateRequest = new GetACHReturnsByDateRequest();
        }

        return $this->GetACHReturnsByDateRequest;
    }
}
