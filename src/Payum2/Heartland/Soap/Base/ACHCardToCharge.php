<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ACHCardToCharge extends CardToCharge
{
    /**
     * ACHCard
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q3:ACHCardData
     *
     * @var ACHCardData
     */
    protected $ACHCard = null;

    /**
     * @param ACHCardData $aCHCard
     *
     * @return ACHCardToCharge
     */
    public function setACHCard(ACHCardData $aCHCard)
    {
        $this->ACHCard = $aCHCard;

        return $this;
    }

    /**
     * @return ACHCardData
     */
    public function getACHCard()
    {
        if (null === $this->ACHCard) {
            $this->ACHCard = new ACHCardData();
        }

        return $this->ACHCard;
    }
}
