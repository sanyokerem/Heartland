<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ReversePaymentByOrderIDRequest extends MerchantRequest
{
    /**
     * BaseAmountToRefund
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $BaseAmountToRefund = null;

    /**
     * EndUserBrowserType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $EndUserBrowserType = null;

    /**
     * EndUserIPAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $EndUserIPAddress = null;

    /**
     * FeeAmountToRefund
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $FeeAmountToRefund = null;

    /**
     * OrderIDOfReversal
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $OrderIDOfReversal = null;

    /**
     * OrderIDToReverse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $OrderIDToReverse = null;

    /**
     * @param float $baseAmountToRefund
     *
     * @return ReversePaymentByOrderIDRequest
     */
    public function setBaseAmountToRefund($baseAmountToRefund)
    {
        $this->BaseAmountToRefund = $baseAmountToRefund;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAmountToRefund()
    {
        return $this->BaseAmountToRefund;
    }

    /**
     * @param string $endUserBrowserType
     *
     * @return ReversePaymentByOrderIDRequest
     */
    public function setEndUserBrowserType($endUserBrowserType)
    {
        $this->EndUserBrowserType = $endUserBrowserType;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndUserBrowserType()
    {
        return $this->EndUserBrowserType;
    }

    /**
     * @param string $endUserIPAddress
     *
     * @return ReversePaymentByOrderIDRequest
     */
    public function setEndUserIPAddress($endUserIPAddress)
    {
        $this->EndUserIPAddress = $endUserIPAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndUserIPAddress()
    {
        return $this->EndUserIPAddress;
    }

    /**
     * @param float $feeAmountToRefund
     *
     * @return ReversePaymentByOrderIDRequest
     */
    public function setFeeAmountToRefund($feeAmountToRefund)
    {
        $this->FeeAmountToRefund = $feeAmountToRefund;

        return $this;
    }

    /**
     * @return float
     */
    public function getFeeAmountToRefund()
    {
        return $this->FeeAmountToRefund;
    }

    /**
     * @param string $orderIDOfReversal
     *
     * @return ReversePaymentByOrderIDRequest
     */
    public function setOrderIDOfReversal($orderIDOfReversal)
    {
        $this->OrderIDOfReversal = $orderIDOfReversal;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderIDOfReversal()
    {
        return $this->OrderIDOfReversal;
    }

    /**
     * @param string $orderIDToReverse
     *
     * @return ReversePaymentByOrderIDRequest
     */
    public function setOrderIDToReverse($orderIDToReverse)
    {
        $this->OrderIDToReverse = $orderIDToReverse;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderIDToReverse()
    {
        return $this->OrderIDToReverse;
    }
}
