<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddReversalResponse
{
    /**
     * AddReversalResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q6:Response
     *
     * @var Response
     */
    protected $AddReversalResult = null;

    /**
     * @param Response $addReversalResult
     *
     * @return AddReversalResponse
     */
    public function setAddReversalResult(Response $addReversalResult)
    {
        $this->AddReversalResult = $addReversalResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getAddReversalResult()
    {
        if (null === $this->AddReversalResult) {
            $this->AddReversalResult = new Response();
        }

        return $this->AddReversalResult;
    }
}
