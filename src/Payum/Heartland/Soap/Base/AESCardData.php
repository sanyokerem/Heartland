<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd5
 */
class AESCardData
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
     * EncryptedTrackData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $EncryptedTrackData = null;

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
     * KeySerialNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $KeySerialNumber = null;

    /**
     * ObfuscatedCardNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ObfuscatedCardNumber = null;

    /**
     * @param CardHolderData $cardHolderData
     *
     * @return AESCardData
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
     * @param string $encryptedTrackData
     *
     * @return AESCardData
     */
    public function setEncryptedTrackData($encryptedTrackData)
    {
        $this->EncryptedTrackData = $encryptedTrackData;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptedTrackData()
    {
        return $this->EncryptedTrackData;
    }

    /**
     * @param int $expirationMonth
     *
     * @return AESCardData
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
     * @return AESCardData
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
     * @param string $keySerialNumber
     *
     * @return AESCardData
     */
    public function setKeySerialNumber($keySerialNumber)
    {
        $this->KeySerialNumber = $keySerialNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeySerialNumber()
    {
        return $this->KeySerialNumber;
    }

    /**
     * @param string $obfuscatedCardNumber
     *
     * @return AESCardData
     */
    public function setObfuscatedCardNumber($obfuscatedCardNumber)
    {
        $this->ObfuscatedCardNumber = $obfuscatedCardNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getObfuscatedCardNumber()
    {
        return $this->ObfuscatedCardNumber;
    }
}
