<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetConvenienceFee
{
    /**
     * GetConvenienceFeeRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q39:GetConvenienceFeeRequest
     *
     * @var GetConvenienceFeeRequest
     */
    protected $GetConvenienceFeeRequest = null;

    /**
     * @param GetConvenienceFeeRequest $getConvenienceFeeRequest
     *
     * @return GetConvenienceFee
     */
    public function setGetConvenienceFeeRequest(GetConvenienceFeeRequest $getConvenienceFeeRequest)
    {
        $this->GetConvenienceFeeRequest = $getConvenienceFeeRequest;

        return $this;
    }

    /**
     * @return GetConvenienceFeeRequest
     */
    public function getGetConvenienceFeeRequest()
    {
        if (null === $this->GetConvenienceFeeRequest) {
            $this->GetConvenienceFeeRequest = new GetConvenienceFeeRequest();
        }

        return $this->GetConvenienceFeeRequest;
    }
}
