<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LoadSecurePayIVRDataExtendedResponse
{
    /**
     * LoadSecurePayIVRDataExtendedResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q52:LoadSecurePayIVRDataResponse
     *
     * @var LoadSecurePayIVRDataResponse
     */
    protected $LoadSecurePayIVRDataExtendedResult = null;

    /**
     * @param LoadSecurePayIVRDataResponse $loadSecurePayIVRDataExtendedResult
     *
     * @return LoadSecurePayIVRDataExtendedResponse
     */
    public function setLoadSecurePayIVRDataExtendedResult(LoadSecurePayIVRDataResponse $loadSecurePayIVRDataExtendedResult)
    {
        $this->LoadSecurePayIVRDataExtendedResult = $loadSecurePayIVRDataExtendedResult;

        return $this;
    }

    /**
     * @return LoadSecurePayIVRDataResponse
     */
    public function getLoadSecurePayIVRDataExtendedResult()
    {
        if (null === $this->LoadSecurePayIVRDataExtendedResult) {
            $this->LoadSecurePayIVRDataExtendedResult = new LoadSecurePayIVRDataResponse();
        }

        return $this->LoadSecurePayIVRDataExtendedResult;
    }
}
