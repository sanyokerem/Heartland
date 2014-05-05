<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class RegisterTokenToAdditionalMerchant
{
    /**
     * request
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q43:RegisterTokenToAdditionalMerchantRequest
     *
     * @var RegisterTokenToAdditionalMerchantRequest
     */
    protected $request = null;

    /**
     * @param RegisterTokenToAdditionalMerchantRequest $request
     *
     * @return RegisterTokenToAdditionalMerchant
     */
    public function setRequest(RegisterTokenToAdditionalMerchantRequest $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return RegisterTokenToAdditionalMerchantRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new RegisterTokenToAdditionalMerchantRequest();
        }

        return $this->request;
    }
}
