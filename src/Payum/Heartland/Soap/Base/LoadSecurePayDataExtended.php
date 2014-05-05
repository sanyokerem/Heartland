<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LoadSecurePayDataExtended
{
    /**
     * request
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q49:LoadSecurePayDataExtendedRequest
     *
     * @var LoadSecurePayDataExtendedRequest
     */
    protected $request = null;

    /**
     * @param LoadSecurePayDataExtendedRequest $request
     *
     * @return LoadSecurePayDataExtended
     */
    public function setRequest(LoadSecurePayDataExtendedRequest $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return LoadSecurePayDataExtendedRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new LoadSecurePayDataExtendedRequest();
        }

        return $this->request;
    }
}
