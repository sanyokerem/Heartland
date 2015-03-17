<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetConvenienceFeeRequest extends MerchantRequest
{
    /**
     * BaseAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $BaseAmount;

    /**
     * CardNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CardNumber = null;

    /**
     * CardProcessingMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:CardProcessingMethod
     *
     * @var CardProcessingMethod
     */
    protected $CardProcessingMethod;

    /**
     * PaymentMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:PaymentMethod
     *
     * @var PaymentMethod
     */
    protected $PaymentMethod;

    /**
     * @param float $baseAmount
     *
     * @return GetConvenienceFeeRequest
     */
    public function setBaseAmount($baseAmount)
    {
        $this->BaseAmount = $baseAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->BaseAmount;
    }

    /**
     * @param string $cardNumber
     *
     * @return GetConvenienceFeeRequest
     */
    public function setCardNumber($cardNumber)
    {
        $this->CardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param CardProcessingMethod $cardProcessingMethod
     *
     * @return GetConvenienceFeeRequest
     */
    public function setCardProcessingMethod($cardProcessingMethod)
    {
        $this->CardProcessingMethod = $cardProcessingMethod;

        return $this;
    }

    /**
     * @return CardProcessingMethod
     */
    public function getCardProcessingMethod()
    {
        return $this->CardProcessingMethod;
    }

    /**
     * @param PaymentMethod $paymentMethod
     *
     * @return GetConvenienceFeeRequest
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->PaymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
}
