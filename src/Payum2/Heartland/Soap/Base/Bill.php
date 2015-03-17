<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Bill extends BillData
{
    /**
     * BillIsPayable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $BillIsPayable = null;

    /**
     * RequiredAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $RequiredAmount = null;

    /**
     * @param boolean $billIsPayable
     *
     * @return Bill
     */
    public function setBillIsPayable($billIsPayable)
    {
        $this->BillIsPayable = $billIsPayable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillIsPayable()
    {
        return $this->BillIsPayable;
    }

    /**
     * @param float $requiredAmount
     *
     * @return Bill
     */
    public function setRequiredAmount($requiredAmount)
    {
        $this->RequiredAmount = $requiredAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getRequiredAmount()
    {
        return $this->RequiredAmount;
    }
}
