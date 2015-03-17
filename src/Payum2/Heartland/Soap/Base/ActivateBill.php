<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ActivateBill
{
    /**
     * ActivateBillRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q15:ActivateBillRequest
     *
     * @var ActivateBillRequest
     */
    protected $ActivateBillRequest = null;

    /**
     * @param ActivateBillRequest $activateBillRequest
     *
     * @return ActivateBill
     */
    public function setActivateBillRequest(ActivateBillRequest $activateBillRequest)
    {
        $this->ActivateBillRequest = $activateBillRequest;

        return $this;
    }

    /**
     * @return ActivateBillRequest
     */
    public function getActivateBillRequest()
    {
        if (null === $this->ActivateBillRequest) {
            $this->ActivateBillRequest = new ActivateBillRequest();
        }

        return $this->ActivateBillRequest;
    }
}
