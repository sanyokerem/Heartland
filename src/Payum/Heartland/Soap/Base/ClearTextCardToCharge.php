<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ClearTextCardToCharge extends CardToCharge
{
    /**
     * ClearTextCreditCard
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q5:ClearTextCardData
     *
     * @var ClearTextCardData
     */
    protected $ClearTextCreditCard = null;

    /**
     * @param ClearTextCardData $clearTextCreditCard
     *
     * @return ClearTextCardToCharge
     */
    public function setClearTextCreditCard(ClearTextCardData $clearTextCreditCard)
    {
        $this->ClearTextCreditCard = $clearTextCreditCard;

        return $this;
    }

    /**
     * @return ClearTextCardData
     */
    public function getClearTextCreditCard()
    {
        if (null === $this->ClearTextCreditCard) {
            $this->ClearTextCreditCard = new ClearTextCardData();
        }

        return $this->ClearTextCreditCard;
    }
}
