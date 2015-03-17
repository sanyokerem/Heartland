<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class CloseCurrentCardBatch
{
    /**
     * CloseCurrentCardBatchRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q77:CloseCurrentCardBatchRequest
     *
     * @var CloseCurrentCardBatchRequest
     */
    protected $CloseCurrentCardBatchRequest = null;

    /**
     * @param CloseCurrentCardBatchRequest $closeCurrentCardBatchRequest
     *
     * @return CloseCurrentCardBatch
     */
    public function setCloseCurrentCardBatchRequest($closeCurrentCardBatchRequest)
    {
        $this->CloseCurrentCardBatchRequest = $closeCurrentCardBatchRequest;

        return $this;
    }

    /**
     * @return CloseCurrentCardBatchRequest
     */
    public function getCloseCurrentCardBatchRequest()
    {
        return $this->CloseCurrentCardBatchRequest;
    }
}
