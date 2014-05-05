<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd5
 */
class ClearTextCardData
{
    /**
     * CardHolderData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:CardHolderData
     *
     * @var CardHolderData
     */
    protected $CardHolderData = null;

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
     * ExpirationMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ExpirationMonth;

    /**
     * ExpirationYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ExpirationYear;

    /**
     * VerificationCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $VerificationCode = null;

    /**
     * @param CardHolderData $cardHolderData
     *
     * @return ClearTextCardData
     */
    public function setCardHolderData(CardHolderData $cardHolderData)
    {
        $this->CardHolderData = $cardHolderData;

        return $this;
    }

    /**
     * @return CardHolderData
     */
    public function getCardHolderData()
    {
        if (null === $this->CardHolderData) {
            $this->CardHolderData = new CardHolderData();
        }

        return $this->CardHolderData;
    }

    /**
     * @param string $cardNumber
     *
     * @return ClearTextCardData
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
     * @param int $expirationMonth
     *
     * @return ClearTextCardData
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->ExpirationMonth = $expirationMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->ExpirationMonth;
    }

    /**
     * @param int $expirationYear
     *
     * @return ClearTextCardData
     */
    public function setExpirationYear($expirationYear)
    {
        $this->ExpirationYear = $expirationYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->ExpirationYear;
    }

    /**
     * @param string $verificationCode
     *
     * @return ClearTextCardData
     */
    public function setVerificationCode($verificationCode)
    {
        $this->VerificationCode = $verificationCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getVerificationCode()
    {
        return $this->VerificationCode;
    }
}
