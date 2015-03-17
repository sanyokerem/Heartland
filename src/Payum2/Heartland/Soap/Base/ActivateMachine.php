<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ActivateMachine
{
    /**
     * ActivateMachineRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q7:ActivateMachineRequest
     *
     * @var ActivateMachineRequest
     */
    protected $ActivateMachineRequest = null;

    /**
     * @param ActivateMachineRequest $activateMachineRequest
     *
     * @return ActivateMachine
     */
    public function setActivateMachineRequest(ActivateMachineRequest $activateMachineRequest)
    {
        $this->ActivateMachineRequest = $activateMachineRequest;

        return $this;
    }

    /**
     * @return ActivateMachineRequest
     */
    public function getActivateMachineRequest()
    {
        if (null === $this->ActivateMachineRequest) {
            $this->ActivateMachineRequest = new ActivateMachineRequest();
        }

        return $this->ActivateMachineRequest;
    }
}
