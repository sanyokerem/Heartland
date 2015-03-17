<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class UpdateTokenExpirationDateResponse
{
    /**
     * UpdateTokenExpirationDateResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q20:Response
     *
     * @var Response
     */
    protected $UpdateTokenExpirationDateResult = null;

    /**
     * @param Response $updateTokenExpirationDateResult
     *
     * @return UpdateTokenExpirationDateResponse
     */
    public function setUpdateTokenExpirationDateResult(Response $updateTokenExpirationDateResult)
    {
        $this->UpdateTokenExpirationDateResult = $updateTokenExpirationDateResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getUpdateTokenExpirationDateResult()
    {
        if (null === $this->UpdateTokenExpirationDateResult) {
            $this->UpdateTokenExpirationDateResult = new Response();
        }

        return $this->UpdateTokenExpirationDateResult;
    }
}
