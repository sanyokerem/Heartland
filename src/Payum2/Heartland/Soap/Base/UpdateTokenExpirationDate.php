<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class UpdateTokenExpirationDate
{
    /**
     * UpdateTokenExpirationDateRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q19:UpdateTokenExpirationDateRequest
     *
     * @var UpdateTokenExpirationDateRequest
     */
    protected $UpdateTokenExpirationDateRequest = null;

    /**
     * @param UpdateTokenExpirationDateRequest $updateTokenExpirationDateRequest
     *
     * @return UpdateTokenExpirationDate
     */
    public function setUpdateTokenExpirationDateRequest(UpdateTokenExpirationDateRequest $updateTokenExpirationDateRequest)
    {
        $this->UpdateTokenExpirationDateRequest = $updateTokenExpirationDateRequest;

        return $this;
    }

    /**
     * @return UpdateTokenExpirationDateRequest
     */
    public function getUpdateTokenExpirationDateRequest()
    {
        if (null === $this->UpdateTokenExpirationDateRequest) {
            $this->UpdateTokenExpirationDateRequest = new UpdateTokenExpirationDateRequest();
        }

        return $this->UpdateTokenExpirationDateRequest;
    }
}
