<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ActivateMachineResponse
{
    /**
     * ActivateMachineResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q8:Response
     *
     * @var Response
     */
    protected $ActivateMachineResult = null;

    /**
     * @param Response $activateMachineResult
     *
     * @return ActivateMachineResponse
     */
    public function setActivateMachineResult(Response $activateMachineResult)
    {
        $this->ActivateMachineResult = $activateMachineResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getActivateMachineResult()
    {
        if (null === $this->ActivateMachineResult) {
            $this->ActivateMachineResult = new Response();
        }

        return $this->ActivateMachineResult;
    }
}
