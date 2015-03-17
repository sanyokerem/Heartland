<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd5
 */
class E3CardData
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
     * EncryptedPanData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $EncryptedPanData = null;

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
     * KeyTransmissionBlock
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $KeyTransmissionBlock = null;

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
     * @return E3CardData
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
     * @param string $encryptedPanData
     *
     * @return E3CardData
     */
    public function setEncryptedPanData($encryptedPanData)
    {
        $this->EncryptedPanData = $encryptedPanData;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptedPanData()
    {
        return $this->EncryptedPanData;
    }

    /**
     * @param string $encryptedTrackData
     *
     * @return E3CardData
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
     * @return E3CardData
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
     * @return E3CardData
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
     * @param string $keyTransmissionBlock
     *
     * @return E3CardData
     */
    public function setKeyTransmissionBlock($keyTransmissionBlock)
    {
        $this->KeyTransmissionBlock = $keyTransmissionBlock;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyTransmissionBlock()
    {
        return $this->KeyTransmissionBlock;
    }

    /**
     * @param string $obfuscatedCardNumber
     *
     * @return E3CardData
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
