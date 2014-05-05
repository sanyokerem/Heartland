<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddSignature
{
    /**
     * AddSignatureRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q63:AddSignatureRequest
     *
     * @var AddSignatureRequest
     */
    protected $AddSignatureRequest = null;

    /**
     * @param AddSignatureRequest $addSignatureRequest
     *
     * @return AddSignature
     */
    public function setAddSignatureRequest(AddSignatureRequest $addSignatureRequest)
    {
        $this->AddSignatureRequest = $addSignatureRequest;

        return $this;
    }

    /**
     * @return AddSignatureRequest
     */
    public function getAddSignatureRequest()
    {
        if (null === $this->AddSignatureRequest) {
            $this->AddSignatureRequest = new AddSignatureRequest();
        }

        return $this->AddSignatureRequest;
    }
}
