<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class EndOfDayReportResponse extends GetFileResponse
{
    /**
     * CashierTotals
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfEndOfDayReportTotalForCashier
     *
     * @var ArrayOfEndOfDayReportTotalForCashier
     */
    protected $CashierTotals = null;

    /**
     * Header
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:EndOfDayReportHeader
     *
     * @var EndOfDayReportHeader
     */
    protected $Header = null;

    /**
     * SummaryTotal
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:EndOfDayReportTotals
     *
     * @var EndOfDayReportTotals
     */
    protected $SummaryTotal = null;

    /**
     * Transactions
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfTransactionRecord
     *
     * @var ArrayOfTransactionRecord
     */
    protected $Transactions = null;

    /**
     * EndOfDayReportResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q22:EndOfDayReportResponse
     *
     * @var EndOfDayReportResponse
     */
    protected $EndOfDayReportResult = null;

    /**
     * @param ArrayOfEndOfDayReportTotalForCashier $cashierTotals
     *
     * @return EndOfDayReportResponse
     */
    public function setCashierTotals(ArrayOfEndOfDayReportTotalForCashier $cashierTotals)
    {
        $this->CashierTotals = $cashierTotals;

        return $this;
    }

    /**
     * @return ArrayOfEndOfDayReportTotalForCashier
     */
    public function getCashierTotals()
    {
        if (null === $this->CashierTotals) {
            $this->CashierTotals = new ArrayOfEndOfDayReportTotalForCashier();
        }

        return $this->CashierTotals;
    }

    /**
     * @param EndOfDayReportHeader $header
     *
     * @return EndOfDayReportResponse
     */
    public function setHeader(EndOfDayReportHeader $header)
    {
        $this->Header = $header;

        return $this;
    }

    /**
     * @return EndOfDayReportHeader
     */
    public function getHeader()
    {
        if (null === $this->Header) {
            $this->Header = new EndOfDayReportHeader();
        }

        return $this->Header;
    }

    /**
     * @param EndOfDayReportTotals $summaryTotal
     *
     * @return EndOfDayReportResponse
     */
    public function setSummaryTotal(EndOfDayReportTotals $summaryTotal)
    {
        $this->SummaryTotal = $summaryTotal;

        return $this;
    }

    /**
     * @return EndOfDayReportTotals
     */
    public function getSummaryTotal()
    {
        if (null === $this->SummaryTotal) {
            $this->SummaryTotal = new EndOfDayReportTotals();
        }

        return $this->SummaryTotal;
    }

    /**
     * @param ArrayOfTransactionRecord $transactions
     *
     * @return EndOfDayReportResponse
     */
    public function setTransactions(ArrayOfTransactionRecord $transactions)
    {
        $this->Transactions = $transactions;

        return $this;
    }

    /**
     * @return ArrayOfTransactionRecord
     */
    public function getTransactions()
    {
        if (null === $this->Transactions) {
            $this->Transactions = new ArrayOfTransactionRecord();
        }

        return $this->Transactions;
    }

    /**
     * @param EndOfDayReportResponse $endOfDayReportResult
     *
     * @return EndOfDayReportResponse
     */
    public function setEndOfDayReportResult(EndOfDayReportResponse $endOfDayReportResult)
    {
        $this->EndOfDayReportResult = $endOfDayReportResult;

        return $this;
    }

    /**
     * @return EndOfDayReportResponse
     */
    public function getEndOfDayReportResult()
    {
        if (null === $this->EndOfDayReportResult) {
            $this->EndOfDayReportResult = new EndOfDayReportResponse();
        }

        return $this->EndOfDayReportResult;
    }
}
