<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class RemovePreAuthorizedAccountResponse extends Response
{
    /**
     * RemovePreAuthorizedAccountResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q76:RemovePreAuthorizedAccountResponse
     *
     * @var RemovePreAuthorizedAccountResponse
     */
    protected $RemovePreAuthorizedAccountResult = null;

    /**
     * @param RemovePreAuthorizedAccountResponse $removePreAuthorizedAccountResult
     *
     * @return RemovePreAuthorizedAccountResponse
     */
    public function setRemovePreAuthorizedAccountResult($removePreAuthorizedAccountResult)
    {
        $this->RemovePreAuthorizedAccountResult = $removePreAuthorizedAccountResult;

        return $this;
    }

    /**
     * @return RemovePreAuthorizedAccountResponse
     */
    public function getRemovePreAuthorizedAccountResult()
    {
        return $this->RemovePreAuthorizedAccountResult;
    }
}
