<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddSignatureResponse
{
    /**
     * AddSignatureResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q64:Response
     *
     * @var Response
     */
    protected $AddSignatureResult = null;

    /**
     * @param Response $addSignatureResult
     *
     * @return AddSignatureResponse
     */
    public function setAddSignatureResult(Response $addSignatureResult)
    {
        $this->AddSignatureResult = $addSignatureResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getAddSignatureResult()
    {
        if (null === $this->AddSignatureResult) {
            $this->AddSignatureResult = new Response();
        }

        return $this->AddSignatureResult;
    }
}
