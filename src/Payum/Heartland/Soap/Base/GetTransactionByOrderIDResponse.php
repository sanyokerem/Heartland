<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetTransactionByOrderIDResponse
{
    /**
     * GetTransactionByOrderIDResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q80:GetTransactionResponse
     *
     * @var GetTransactionResponse
     */
    protected $GetTransactionByOrderIDResult = null;

    /**
     * @param GetTransactionResponse $getTransactionByOrderIDResult
     *
     * @return GetTransactionByOrderIDResponse
     */
    public function setGetTransactionByOrderIDResult(GetTransactionResponse $getTransactionByOrderIDResult)
    {
        $this->GetTransactionByOrderIDResult = $getTransactionByOrderIDResult;

        return $this;
    }

    /**
     * @return GetTransactionResponse
     */
    public function getGetTransactionByOrderIDResult()
    {
        if (null === $this->GetTransactionByOrderIDResult) {
            $this->GetTransactionByOrderIDResult = new GetTransactionResponse();
        }

        return $this->GetTransactionByOrderIDResult;
    }
}
