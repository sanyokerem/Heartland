<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd4
 */
class ACHCardData
{
    /**
     * CardHolderData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ACHCardHolderData
     *
     * @var ACHCardHolderData
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
     * @param ACHCardHolderData $cardHolderData
     *
     * @return ACHCardData
     */
    public function setCardHolderData(ACHCardHolderData $cardHolderData)
    {
        $this->CardHolderData = $cardHolderData;

        return $this;
    }

    /**
     * @return ACHCardHolderData
     */
    public function getCardHolderData()
    {
        if (null === $this->CardHolderData) {
            $this->CardHolderData = new ACHCardHolderData();
        }

        return $this->CardHolderData;
    }

    /**
     * @param string $cardNumber
     *
     * @return ACHCardData
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
}
