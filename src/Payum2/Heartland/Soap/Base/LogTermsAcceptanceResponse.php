<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LogTermsAcceptanceResponse
{
    /**
     * LogTermsAcceptanceResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q66:Response
     *
     * @var Response
     */
    protected $LogTermsAcceptanceResult = null;

    /**
     * @param Response $logTermsAcceptanceResult
     *
     * @return LogTermsAcceptanceResponse
     */
    public function setLogTermsAcceptanceResult(Response $logTermsAcceptanceResult)
    {
        $this->LogTermsAcceptanceResult = $logTermsAcceptanceResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getLogTermsAcceptanceResult()
    {
        if (null === $this->LogTermsAcceptanceResult) {
            $this->LogTermsAcceptanceResult = new Response();
        }

        return $this->LogTermsAcceptanceResult;
    }
}
