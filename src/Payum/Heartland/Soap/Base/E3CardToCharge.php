<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class E3CardToCharge extends CardToCharge
{
    /**
     * E3CreditCard
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q6:E3CardData
     *
     * @var E3CardData
     */
    protected $E3CreditCard = null;

    /**
     * @param E3CardData $e3CreditCard
     *
     * @return E3CardToCharge
     */
    public function setE3CreditCard(E3CardData $e3CreditCard)
    {
        $this->E3CreditCard = $e3CreditCard;

        return $this;
    }

    /**
     * @return E3CardData
     */
    public function getE3CreditCard()
    {
        if (null === $this->E3CreditCard) {
            $this->E3CreditCard = new E3CardData();
        }

        return $this->E3CreditCard;
    }
}
