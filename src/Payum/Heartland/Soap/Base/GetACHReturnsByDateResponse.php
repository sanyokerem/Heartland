<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetACHReturnsByDateResponse extends GetFileResponse
{
    /**
     * Returns
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfACHReturnRecord
     *
     * @var ArrayOfACHReturnRecord
     */
    protected $Returns = null;

    /**
     * SummaryTotal
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ACHReturnTotals
     *
     * @var ACHReturnTotals
     */
    protected $SummaryTotal = null;

    /**
     * GetACHReturnsByDateResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q72:GetACHReturnsByDateResponse
     *
     * @var GetACHReturnsByDateResponse
     */
    protected $GetACHReturnsByDateResult = null;

    /**
     * @param ArrayOfACHReturnRecord $returns
     *
     * @return GetACHReturnsByDateResponse
     */
    public function setReturns(ArrayOfACHReturnRecord $returns)
    {
        $this->Returns = $returns;

        return $this;
    }

    /**
     * @return ArrayOfACHReturnRecord
     */
    public function getReturns()
    {
        if (null === $this->Returns) {
            $this->Returns = new ArrayOfACHReturnRecord();
        }

        return $this->Returns;
    }

    /**
     * @param ACHReturnTotals $summaryTotal
     *
     * @return GetACHReturnsByDateResponse
     */
    public function setSummaryTotal(ACHReturnTotals $summaryTotal)
    {
        $this->SummaryTotal = $summaryTotal;

        return $this;
    }

    /**
     * @return ACHReturnTotals
     */
    public function getSummaryTotal()
    {
        if (null === $this->SummaryTotal) {
            $this->SummaryTotal = new ACHReturnTotals();
        }

        return $this->SummaryTotal;
    }

    /**
     * @param GetACHReturnsByDateResponse $getACHReturnsByDateResult
     *
     * @return GetACHReturnsByDateResponse
     */
    public function setGetACHReturnsByDateResult(GetACHReturnsByDateResponse $getACHReturnsByDateResult)
    {
        $this->GetACHReturnsByDateResult = $getACHReturnsByDateResult;

        return $this;
    }

    /**
     * @return GetACHReturnsByDateResponse
     */
    public function getGetACHReturnsByDateResult()
    {
        if (null === $this->GetACHReturnsByDateResult) {
            $this->GetACHReturnsByDateResult = new GetACHReturnsByDateResponse();
        }

        return $this->GetACHReturnsByDateResult;
    }
}
