<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfCloseCurrentCardBatchDetail
{
    /**
     * CloseCurrentCardBatchDetail
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:CloseCurrentCardBatchDetail
     *
     * @var array(CloseCurrentCardBatchDetail)
     */
    protected $CloseCurrentCardBatchDetail = null;

    /**
     * @param array(CloseCurrentCardBatchDetail) $closeCurrentCardBatchDetail
     *
     * @return ArrayOfCloseCurrentCardBatchDetail
     */
    public function setCloseCurrentCardBatchDetail($closeCurrentCardBatchDetail)
    {
        $this->CloseCurrentCardBatchDetail = $closeCurrentCardBatchDetail;

        return $this;
    }

    /**
     * @return array(CloseCurrentCardBatchDetail)
     */
    public function getCloseCurrentCardBatchDetail()
    {
        return $this->CloseCurrentCardBatchDetail;
    }
}
