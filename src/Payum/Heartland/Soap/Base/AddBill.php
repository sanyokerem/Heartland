<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddBill
{
    /**
     * AddBillRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q11:AddBillRequest
     *
     * @var AddBillRequest
     */
    protected $AddBillRequest = null;

    /**
     * Constructor.
     *
     * @param AddBillRequest $addBillRequest
     */
    public function __construct(AddBillRequest $addBillRequest = null)
    {
        $this->AddBillRequest = $addBillRequest;
    }

    /**
     * @param AddBillRequest $addBillRequest
     *
     * @return AddBill
     */
    public function setAddBillRequest(AddBillRequest $addBillRequest)
    {
        $this->AddBillRequest = $addBillRequest;
        return $this;
    }

    /**
     * @return AddBillRequest
     */
    public function getAddBillRequest()
    {
        if (null === $this->AddBillRequest) {
            $this->AddBillRequest = new AddBillRequest();
        }
        return $this->AddBillRequest;
    }
}