<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddBlindPaymentResponse
{
    /**
     * AddBlindPaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q2:Response
     *
     * @var Response
     */
    protected $AddBlindPaymentResult = null;

    /**
     * @param Response $addBlindPaymentResult
     *
     * @return AddBlindPaymentResponse
     */
    public function setAddBlindPaymentResult(Response $addBlindPaymentResult)
    {
        $this->AddBlindPaymentResult = $addBlindPaymentResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getAddBlindPaymentResult()
    {
        if (null === $this->AddBlindPaymentResult) {
            $this->AddBlindPaymentResult = new Response();
        }

        return $this->AddBlindPaymentResult;
    }
}
