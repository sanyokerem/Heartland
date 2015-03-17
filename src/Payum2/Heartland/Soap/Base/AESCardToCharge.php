<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AESCardToCharge extends CardToCharge
{
    /**
     * AESCreditCard
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q4:AESCardData
     *
     * @var AESCardData
     */
    protected $AESCreditCard = null;

    /**
     * @param AESCardData $aESCreditCard
     *
     * @return AESCardToCharge
     */
    public function setAESCreditCard(AESCardData $aESCreditCard)
    {
        $this->AESCreditCard = $aESCreditCard;

        return $this;
    }

    /**
     * @return AESCardData
     */
    public function getAESCreditCard()
    {
        if (null === $this->AESCreditCard) {
            $this->AESCreditCard = new AESCardData();
        }

        return $this->AESCreditCard;
    }
}
