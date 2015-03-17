<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class UpdateBillResponse
{
    /**
     * UpdateBillResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q14:Response
     *
     * @var Response
     */
    protected $UpdateBillResult = null;

    /**
     * @param Response $updateBillResult
     *
     * @return UpdateBillResponse
     */
    public function setUpdateBillResult(Response $updateBillResult)
    {
        $this->UpdateBillResult = $updateBillResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getUpdateBillResult()
    {
        if (null === $this->UpdateBillResult) {
            $this->UpdateBillResult = new Response();
        }

        return $this->UpdateBillResult;
    }
}
