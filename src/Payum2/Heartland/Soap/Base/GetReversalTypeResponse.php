<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetReversalTypeResponse extends Response
{
    /**
     * ReversalType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReversalType
     *
     * @var ReversalType
     */
    protected $ReversalType;

    /**
     * GetReversalTypeResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q38:GetReversalTypeResponse
     *
     * @var GetReversalTypeResponse
     */
    protected $GetReversalTypeResult = null;

    /**
     * @param ReversalType $reversalType
     *
     * @return GetReversalTypeResponse
     */
    public function setReversalType($reversalType)
    {
        $this->ReversalType = $reversalType;

        return $this;
    }

    /**
     * @return ReversalType
     */
    public function getReversalType()
    {
        return $this->ReversalType;
    }

    /**
     * @param GetReversalTypeResponse $getReversalTypeResult
     *
     * @return GetReversalTypeResponse
     */
    public function setGetReversalTypeResult(GetReversalTypeResponse $getReversalTypeResult)
    {
        $this->GetReversalTypeResult = $getReversalTypeResult;

        return $this;
    }

    /**
     * @return GetReversalTypeResponse
     */
    public function getGetReversalTypeResult()
    {
        if (null === $this->GetReversalTypeResult) {
            $this->GetReversalTypeResult = new GetReversalTypeResponse();
        }

        return $this->GetReversalTypeResult;
    }
}
