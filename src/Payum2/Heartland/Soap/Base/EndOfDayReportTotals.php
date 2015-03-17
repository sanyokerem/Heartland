<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class EndOfDayReportTotals
{
    /**
     * NumberOfPayments
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $NumberOfPayments;

    /**
     * NumberOfReversals
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $NumberOfReversals;

    /**
     * TotalPaymentAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $TotalPaymentAmount;

    /**
     * TotalReversalAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $TotalReversalAmount;

    /**
     * UserGroupName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $UserGroupName = null;

    /**
     * @param int $numberOfPayments
     *
     * @return EndOfDayReportTotals
     */
    public function setNumberOfPayments($numberOfPayments)
    {
        $this->NumberOfPayments = $numberOfPayments;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPayments()
    {
        return $this->NumberOfPayments;
    }

    /**
     * @param int $numberOfReversals
     *
     * @return EndOfDayReportTotals
     */
    public function setNumberOfReversals($numberOfReversals)
    {
        $this->NumberOfReversals = $numberOfReversals;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfReversals()
    {
        return $this->NumberOfReversals;
    }

    /**
     * @param float $totalPaymentAmount
     *
     * @return EndOfDayReportTotals
     */
    public function setTotalPaymentAmount($totalPaymentAmount)
    {
        $this->TotalPaymentAmount = $totalPaymentAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPaymentAmount()
    {
        return $this->TotalPaymentAmount;
    }

    /**
     * @param float $totalReversalAmount
     *
     * @return EndOfDayReportTotals
     */
    public function setTotalReversalAmount($totalReversalAmount)
    {
        $this->TotalReversalAmount = $totalReversalAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalReversalAmount()
    {
        return $this->TotalReversalAmount;
    }

    /**
     * @param string $userGroupName
     *
     * @return EndOfDayReportTotals
     */
    public function setUserGroupName($userGroupName)
    {
        $this->UserGroupName = $userGroupName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserGroupName()
    {
        return $this->UserGroupName;
    }
}
