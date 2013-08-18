<?php

namespace Payum\Heartland\Soap\Base;

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
     * - SchemaType: q40:LoadSecurePayBillDataResponse
     *
     * @var LoadSecurePayBillDataResponse
     */
    protected $LoadSecurePayDataExtendedResult = null;

    /**
     * Constructor.
     *
     * @param LoadSecurePayBillDataResponse $loadSecurePayDataExtendedResult
     */
    public function __construct(LoadSecurePayBillDataResponse $loadSecurePayDataExtendedResult = null)
    {
        $this->LoadSecurePayDataExtendedResult = $loadSecurePayDataExtendedResult;
    }

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