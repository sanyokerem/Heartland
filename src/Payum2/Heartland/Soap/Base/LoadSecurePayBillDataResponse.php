<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LoadSecurePayBillDataResponse extends Response
{
    /**
     * GUID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $GUID = null;

    /**
     * LoadSecurePayBillDataResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q46:LoadSecurePayBillDataResponse
     *
     * @var LoadSecurePayBillDataResponse
     */
    protected $LoadSecurePayBillDataResult = null;

    /**
     * @param string $gUID
     *
     * @return LoadSecurePayBillDataResponse
     */
    public function setGUID($gUID)
    {
        $this->GUID = $gUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param LoadSecurePayBillDataResponse $loadSecurePayBillDataResult
     *
     * @return LoadSecurePayBillDataResponse
     */
    public function setLoadSecurePayBillDataResult(LoadSecurePayBillDataResponse $loadSecurePayBillDataResult)
    {
        $this->LoadSecurePayBillDataResult = $loadSecurePayBillDataResult;

        return $this;
    }

    /**
     * @return LoadSecurePayBillDataResponse
     */
    public function getLoadSecurePayBillDataResult()
    {
        if (null === $this->LoadSecurePayBillDataResult) {
            $this->LoadSecurePayBillDataResult = new LoadSecurePayBillDataResponse();
        }

        return $this->LoadSecurePayBillDataResult;
    }
}
