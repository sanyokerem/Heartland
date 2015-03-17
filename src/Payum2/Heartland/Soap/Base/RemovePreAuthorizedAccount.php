<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class RemovePreAuthorizedAccount
{
    /**
     * RemovePreAuthorizedAccountRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q75:RemovePreAuthorizedAccountRequest
     *
     * @var RemovePreAuthorizedAccountRequest
     */
    protected $RemovePreAuthorizedAccountRequest = null;

    /**
     * @param RemovePreAuthorizedAccountRequest $removePreAuthorizedAccountRequest
     *
     * @return RemovePreAuthorizedAccount
     */
    public function setRemovePreAuthorizedAccountRequest(RemovePreAuthorizedAccountRequest $removePreAuthorizedAccountRequest)
    {
        $this->RemovePreAuthorizedAccountRequest = $removePreAuthorizedAccountRequest;

        return $this;
    }

    /**
     * @return RemovePreAuthorizedAccountRequest
     */
    public function getRemovePreAuthorizedAccountRequest()
    {
        if (null === $this->RemovePreAuthorizedAccountRequest) {
            $this->RemovePreAuthorizedAccountRequest = new RemovePreAuthorizedAccountRequest();
        }

        return $this->RemovePreAuthorizedAccountRequest;
    }
}
