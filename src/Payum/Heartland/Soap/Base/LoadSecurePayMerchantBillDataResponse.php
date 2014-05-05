<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LoadSecurePayMerchantBillDataResponse
{
    /**
     * LoadSecurePayMerchantBillDataResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q48:LoadSecurePayBillDataResponse
     *
     * @var LoadSecurePayBillDataResponse
     */
    protected $LoadSecurePayMerchantBillDataResult = null;

    /**
     * @param LoadSecurePayBillDataResponse $loadSecurePayMerchantBillDataResult
     *
     * @return LoadSecurePayMerchantBillDataResponse
     */
    public function setLoadSecurePayMerchantBillDataResult(LoadSecurePayBillDataResponse $loadSecurePayMerchantBillDataResult)
    {
        $this->LoadSecurePayMerchantBillDataResult = $loadSecurePayMerchantBillDataResult;

        return $this;
    }

    /**
     * @return LoadSecurePayBillDataResponse
     */
    public function getLoadSecurePayMerchantBillDataResult()
    {
        if (null === $this->LoadSecurePayMerchantBillDataResult) {
            $this->LoadSecurePayMerchantBillDataResult = new LoadSecurePayBillDataResponse();
        }

        return $this->LoadSecurePayMerchantBillDataResult;
    }
}
