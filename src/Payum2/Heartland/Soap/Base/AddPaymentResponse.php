<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddPaymentResponse
{
    /**
     * AddPaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q4:Response
     *
     * @var Response
     */
    protected $AddPaymentResult = null;

    /**
     * @param Response $addPaymentResult
     *
     * @return AddPaymentResponse
     */
    public function setAddPaymentResult(Response $addPaymentResult)
    {
        $this->AddPaymentResult = $addPaymentResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getAddPaymentResult()
    {
        if (null === $this->AddPaymentResult) {
            $this->AddPaymentResult = new Response();
        }

        return $this->AddPaymentResult;
    }
}
