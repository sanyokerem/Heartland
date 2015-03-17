<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LoadSecurePayIVRDataExtended
{
    /**
     * request
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q51:LoadSecurePayIVRDataExtendedRequest
     *
     * @var LoadSecurePayIVRDataExtendedRequest
     */
    protected $request = null;

    /**
     * @param LoadSecurePayIVRDataExtendedRequest $request
     *
     * @return LoadSecurePayIVRDataExtended
     */
    public function setRequest(LoadSecurePayIVRDataExtendedRequest $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return LoadSecurePayIVRDataExtendedRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new LoadSecurePayIVRDataExtendedRequest();
        }

        return $this->request;
    }
}
