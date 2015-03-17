<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class UpdateSecurePayPaymentResponse
{
    /**
     * UpdateSecurePayPaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q56:Response
     *
     * @var Response
     */
    protected $UpdateSecurePayPaymentResult = null;

    /**
     * @param Response $updateSecurePayPaymentResult
     *
     * @return UpdateSecurePayPaymentResponse
     */
    public function setUpdateSecurePayPaymentResult(Response $updateSecurePayPaymentResult)
    {
        $this->UpdateSecurePayPaymentResult = $updateSecurePayPaymentResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getUpdateSecurePayPaymentResult()
    {
        if (null === $this->UpdateSecurePayPaymentResult) {
            $this->UpdateSecurePayPaymentResult = new Response();
        }

        return $this->UpdateSecurePayPaymentResult;
    }
}
