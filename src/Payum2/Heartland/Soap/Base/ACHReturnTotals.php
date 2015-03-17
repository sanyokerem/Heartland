<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ACHReturnTotals
{
    /**
     * AmountReturned
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $AmountReturned;

    /**
     * NumberOfReturns
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $NumberOfReturns;

    /**
     * @param float $amountReturned
     *
     * @return ACHReturnTotals
     */
    public function setAmountReturned($amountReturned)
    {
        $this->AmountReturned = $amountReturned;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmountReturned()
    {
        return $this->AmountReturned;
    }

    /**
     * @param int $numberOfReturns
     *
     * @return ACHReturnTotals
     */
    public function setNumberOfReturns($numberOfReturns)
    {
        $this->NumberOfReturns = $numberOfReturns;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfReturns()
    {
        return $this->NumberOfReturns;
    }
}
