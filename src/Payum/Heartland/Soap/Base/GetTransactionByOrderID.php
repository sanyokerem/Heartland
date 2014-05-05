<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetTransactionByOrderID
{
    /**
     * GetTransactionByOrderIDRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q79:GetTransactionByOrderIDRequest
     *
     * @var GetTransactionByOrderIDRequest
     */
    protected $GetTransactionByOrderIDRequest = null;

    /**
     * @param GetTransactionByOrderIDRequest $getTransactionByOrderIDRequest
     *
     * @return GetTransactionByOrderID
     */
    public function setGetTransactionByOrderIDRequest(GetTransactionByOrderIDRequest $getTransactionByOrderIDRequest)
    {
        $this->GetTransactionByOrderIDRequest = $getTransactionByOrderIDRequest;

        return $this;
    }

    /**
     * @return GetTransactionByOrderIDRequest
     */
    public function getGetTransactionByOrderIDRequest()
    {
        if (null === $this->GetTransactionByOrderIDRequest) {
            $this->GetTransactionByOrderIDRequest = new GetTransactionByOrderIDRequest();
        }

        return $this->GetTransactionByOrderIDRequest;
    }
}
