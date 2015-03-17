<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class CardToCharge
{
    /**
     * Amount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $Amount;

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
     * ExpectedFeeAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $ExpectedFeeAmount;

    /**
     * @param float $amount
     *
     * @return CardToCharge
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param CardProcessingMethod $cardProcessingMethod
     *
     * @return CardToCharge
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
     * @param float $expectedFeeAmount
     *
     * @return CardToCharge
     */
    public function setExpectedFeeAmount($expectedFeeAmount)
    {
        $this->ExpectedFeeAmount = $expectedFeeAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getExpectedFeeAmount()
    {
        return $this->ExpectedFeeAmount;
    }
}
