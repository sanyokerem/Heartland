<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ReversePaymentRequest extends MerchantRequest
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
     * E3DebitCardsWithPINToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfE3DebitCardWithPINToCharge
     *
     * @var ArrayOfE3DebitCardWithPINToCharge
     */
    protected $E3DebitCardsWithPINToCharge = null;

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
     * ExpectedFeeAmountToRefund
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $ExpectedFeeAmountToRefund = null;

    /**
     * IncludeReceiptInResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $IncludeReceiptInResponse;

    /**
     * Language
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Language
     *
     * @var Language
     */
    protected $Language;

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
     * Transaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $Transaction_ID;

    /**
     * @param float $baseAmountToRefund
     *
     * @return ReversePaymentRequest
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
     * @param ArrayOfE3DebitCardWithPINToCharge $e3DebitCardsWithPINToCharge
     *
     * @return ReversePaymentRequest
     */
    public function setE3DebitCardsWithPINToCharge(ArrayOfE3DebitCardWithPINToCharge $e3DebitCardsWithPINToCharge)
    {
        $this->E3DebitCardsWithPINToCharge = $e3DebitCardsWithPINToCharge;

        return $this;
    }

    /**
     * @return ArrayOfE3DebitCardWithPINToCharge
     */
    public function getE3DebitCardsWithPINToCharge()
    {
        if (null === $this->E3DebitCardsWithPINToCharge) {
            $this->E3DebitCardsWithPINToCharge = new ArrayOfE3DebitCardWithPINToCharge();
        }

        return $this->E3DebitCardsWithPINToCharge;
    }

    /**
     * @param string $endUserBrowserType
     *
     * @return ReversePaymentRequest
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
     * @return ReversePaymentRequest
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
     * @param float $expectedFeeAmountToRefund
     *
     * @return ReversePaymentRequest
     */
    public function setExpectedFeeAmountToRefund($expectedFeeAmountToRefund)
    {
        $this->ExpectedFeeAmountToRefund = $expectedFeeAmountToRefund;

        return $this;
    }

    /**
     * @return float
     */
    public function getExpectedFeeAmountToRefund()
    {
        return $this->ExpectedFeeAmountToRefund;
    }

    /**
     * @param boolean $includeReceiptInResponse
     *
     * @return ReversePaymentRequest
     */
    public function setIncludeReceiptInResponse($includeReceiptInResponse)
    {
        $this->IncludeReceiptInResponse = $includeReceiptInResponse;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeReceiptInResponse()
    {
        return $this->IncludeReceiptInResponse;
    }

    /**
     * @param Language $language
     *
     * @return ReversePaymentRequest
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $orderIDOfReversal
     *
     * @return ReversePaymentRequest
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
     * @param int $transaction_ID
     *
     * @return ReversePaymentRequest
     */
    public function setTransaction_ID($transaction_ID)
    {
        $this->Transaction_ID = $transaction_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransaction_ID()
    {
        return $this->Transaction_ID;
    }
}
