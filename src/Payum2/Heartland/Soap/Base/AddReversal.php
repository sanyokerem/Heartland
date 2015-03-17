<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddReversal
{
    /**
     * AddReversalRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q5:AddReversalRequest
     *
     * @var AddReversalRequest
     */
    protected $AddReversalRequest = null;

    /**
     * @param AddReversalRequest $addReversalRequest
     *
     * @return AddReversal
     */
    public function setAddReversalRequest(AddReversalRequest $addReversalRequest)
    {
        $this->AddReversalRequest = $addReversalRequest;

        return $this;
    }

    /**
     * @return AddReversalRequest
     */
    public function getAddReversalRequest()
    {
        if (null === $this->AddReversalRequest) {
            $this->AddReversalRequest = new AddReversalRequest();
        }

        return $this->AddReversalRequest;
    }
}
