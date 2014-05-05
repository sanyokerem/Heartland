<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class CloseCurrentCardBatchResponse extends Response
{
    /**
     * CloseCurrentCardBatchDetails
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfCloseCurrentCardBatchDetail
     *
     * @var ArrayOfCloseCurrentCardBatchDetail
     */
    protected $CloseCurrentCardBatchDetails = null;

    /**
     * CloseCurrentCardBatchResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q78:CloseCurrentCardBatchResponse
     *
     * @var CloseCurrentCardBatchResponse
     */
    protected $CloseCurrentCardBatchResult = null;

    /**
     * @param ArrayOfCloseCurrentCardBatchDetail $closeCurrentCardBatchDetails
     *
     * @return CloseCurrentCardBatchResponse
     */
    public function setCloseCurrentCardBatchDetails(ArrayOfCloseCurrentCardBatchDetail $closeCurrentCardBatchDetails)
    {
        $this->CloseCurrentCardBatchDetails = $closeCurrentCardBatchDetails;

        return $this;
    }

    /**
     * @return ArrayOfCloseCurrentCardBatchDetail
     */
    public function getCloseCurrentCardBatchDetails()
    {
        if (null === $this->CloseCurrentCardBatchDetails) {
            $this->CloseCurrentCardBatchDetails = new ArrayOfCloseCurrentCardBatchDetail();
        }

        return $this->CloseCurrentCardBatchDetails;
    }

    /**
     * @param CloseCurrentCardBatchResponse $closeCurrentCardBatchResult
     *
     * @return CloseCurrentCardBatchResponse
     */
    public function setCloseCurrentCardBatchResult(CloseCurrentCardBatchResponse $closeCurrentCardBatchResult)
    {
        $this->CloseCurrentCardBatchResult = $closeCurrentCardBatchResult;

        return $this;
    }

    /**
     * @return CloseCurrentCardBatchResponse
     */
    public function getCloseCurrentCardBatchResult()
    {
        if (null === $this->CloseCurrentCardBatchResult) {
            $this->CloseCurrentCardBatchResult = new CloseCurrentCardBatchResponse();
        }

        return $this->CloseCurrentCardBatchResult;
    }
}
