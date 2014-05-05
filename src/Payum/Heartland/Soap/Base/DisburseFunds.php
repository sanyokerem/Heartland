<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class DisburseFunds
{
    /**
     * DisburseFundsRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q67:DisburseFundsRequest
     *
     * @var DisburseFundsRequest
     */
    protected $DisburseFundsRequest = null;

    /**
     * @param DisburseFundsRequest $disburseFundsRequest
     *
     * @return DisburseFunds
     */
    public function setDisburseFundsRequest(DisburseFundsRequest $disburseFundsRequest)
    {
        $this->DisburseFundsRequest = $disburseFundsRequest;

        return $this;
    }

    /**
     * @return DisburseFundsRequest
     */
    public function getDisburseFundsRequest()
    {
        if (null === $this->DisburseFundsRequest) {
            $this->DisburseFundsRequest = new DisburseFundsRequest();
        }

        return $this->DisburseFundsRequest;
    }
}
