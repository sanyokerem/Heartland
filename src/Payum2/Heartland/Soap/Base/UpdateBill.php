<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class UpdateBill
{
    /**
     * UpdateBillRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q13:UpdateBillRequest
     *
     * @var UpdateBillRequest
     */
    protected $UpdateBillRequest = null;

    /**
     * @param UpdateBillRequest $updateBillRequest
     *
     * @return UpdateBill
     */
    public function setUpdateBillRequest(UpdateBillRequest $updateBillRequest)
    {
        $this->UpdateBillRequest = $updateBillRequest;

        return $this;
    }

    /**
     * @return UpdateBillRequest
     */
    public function getUpdateBillRequest()
    {
        if (null === $this->UpdateBillRequest) {
            $this->UpdateBillRequest = new UpdateBillRequest();
        }

        return $this->UpdateBillRequest;
    }
}
