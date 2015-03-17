<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetReversalType
{
    /**
     * GetReversalTypeRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q37:GetReversalTypeRequest
     *
     * @var GetReversalTypeRequest
     */
    protected $GetReversalTypeRequest = null;

    /**
     * @param GetReversalTypeRequest $getReversalTypeRequest
     *
     * @return GetReversalType
     */
    public function setGetReversalTypeRequest(GetReversalTypeRequest $getReversalTypeRequest)
    {
        $this->GetReversalTypeRequest = $getReversalTypeRequest;

        return $this;
    }

    /**
     * @return GetReversalTypeRequest
     */
    public function getGetReversalTypeRequest()
    {
        if (null === $this->GetReversalTypeRequest) {
            $this->GetReversalTypeRequest = new GetReversalTypeRequest();
        }

        return $this->GetReversalTypeRequest;
    }
}
