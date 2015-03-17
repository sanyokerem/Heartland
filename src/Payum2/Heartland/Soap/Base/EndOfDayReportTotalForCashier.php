<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class EndOfDayReportTotalForCashier
{
    /**
     * Firstname
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Firstname = null;

    /**
     * Lastname
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Lastname = null;

    /**
     * RowID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $RowID;

    /**
     * Totals
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:EndOfDayReportTotals
     *
     * @var EndOfDayReportTotals
     */
    protected $Totals = null;

    /**
     * Username
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Username = null;

    /**
     * @param string $firstname
     *
     * @return EndOfDayReportTotalForCashier
     */
    public function setFirstname($firstname)
    {
        $this->Firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->Firstname;
    }

    /**
     * @param string $lastname
     *
     * @return EndOfDayReportTotalForCashier
     */
    public function setLastname($lastname)
    {
        $this->Lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * @param int $rowID
     *
     * @return EndOfDayReportTotalForCashier
     */
    public function setRowID($rowID)
    {
        $this->RowID = $rowID;

        return $this;
    }

    /**
     * @return int
     */
    public function getRowID()
    {
        return $this->RowID;
    }

    /**
     * @param EndOfDayReportTotals $totals
     *
     * @return EndOfDayReportTotalForCashier
     */
    public function setTotals(EndOfDayReportTotals $totals)
    {
        $this->Totals = $totals;

        return $this;
    }

    /**
     * @return EndOfDayReportTotals
     */
    public function getTotals()
    {
        if (null === $this->Totals) {
            $this->Totals = new EndOfDayReportTotals();
        }

        return $this->Totals;
    }

    /**
     * @param string $username
     *
     * @return EndOfDayReportTotalForCashier
     */
    public function setUsername($username)
    {
        $this->Username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->Username;
    }
}
