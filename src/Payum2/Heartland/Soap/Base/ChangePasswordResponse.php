<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ChangePasswordResponse
{
    /**
     * ChangePasswordResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q10:Response
     *
     * @var Response
     */
    protected $ChangePasswordResult = null;

    /**
     * @param Response $changePasswordResult
     *
     * @return ChangePasswordResponse
     */
    public function setChangePasswordResult(Response $changePasswordResult)
    {
        $this->ChangePasswordResult = $changePasswordResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getChangePasswordResult()
    {
        if (null === $this->ChangePasswordResult) {
            $this->ChangePasswordResult = new Response();
        }

        return $this->ChangePasswordResult;
    }
}
