<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LoadSecurePayDataExtendedResponse
{
    /**
     * LoadSecurePayDataExtendedResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q50:LoadSecurePayBillDataResponse
     *
     * @var LoadSecurePayBillDataResponse
     */
    protected $LoadSecurePayDataExtendedResult = null;

    /**
     * @param LoadSecurePayBillDataResponse $loadSecurePayDataExtendedResult
     *
     * @return LoadSecurePayDataExtendedResponse
     */
    public function setLoadSecurePayDataExtendedResult(LoadSecurePayBillDataResponse $loadSecurePayDataExtendedResult)
    {
        $this->LoadSecurePayDataExtendedResult = $loadSecurePayDataExtendedResult;

        return $this;
    }

    /**
     * @return LoadSecurePayBillDataResponse
     */
    public function getLoadSecurePayDataExtendedResult()
    {
        if (null === $this->LoadSecurePayDataExtendedResult) {
            $this->LoadSecurePayDataExtendedResult = new LoadSecurePayBillDataResponse();
        }

        return $this->LoadSecurePayDataExtendedResult;
    }
}
