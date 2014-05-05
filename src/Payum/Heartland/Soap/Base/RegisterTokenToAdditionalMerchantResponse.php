<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class RegisterTokenToAdditionalMerchantResponse
{
    /**
     * RegisterTokenToAdditionalMerchantResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q44:Response
     *
     * @var Response
     */
    protected $RegisterTokenToAdditionalMerchantResult = null;

    /**
     * @param Response $registerTokenToAdditionalMerchantResult
     *
     * @return RegisterTokenToAdditionalMerchantResponse
     */
    public function setRegisterTokenToAdditionalMerchantResult(Response $registerTokenToAdditionalMerchantResult)
    {
        $this->RegisterTokenToAdditionalMerchantResult = $registerTokenToAdditionalMerchantResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getRegisterTokenToAdditionalMerchantResult()
    {
        if (null === $this->RegisterTokenToAdditionalMerchantResult) {
            $this->RegisterTokenToAdditionalMerchantResult = new Response();
        }

        return $this->RegisterTokenToAdditionalMerchantResult;
    }
}
