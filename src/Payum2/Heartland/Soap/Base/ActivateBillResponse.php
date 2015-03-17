<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ActivateBillResponse
{
    /**
     * ActivateBillResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q16:Response
     *
     * @var Response
     */
    protected $ActivateBillResult = null;

    /**
     * @param Response $activateBillResult
     *
     * @return ActivateBillResponse
     */
    public function setActivateBillResult(Response $activateBillResult)
    {
        $this->ActivateBillResult = $activateBillResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getActivateBillResult()
    {
        if (null === $this->ActivateBillResult) {
            $this->ActivateBillResult = new Response();
        }

        return $this->ActivateBillResult;
    }
}
