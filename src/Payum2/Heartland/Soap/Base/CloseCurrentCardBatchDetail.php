<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class CloseCurrentCardBatchDetail
{
    /**
     * BatchID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $BatchID;

    /**
     * BatchSequenceNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $BatchSequenceNumber;

    /**
     * TotalAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $TotalAmount;

    /**
     * TransactionCount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $TransactionCount;

    /**
     * @param int $batchID
     *
     * @return CloseCurrentCardBatchDetail
     */
    public function setBatchID($batchID)
    {
        $this->BatchID = $batchID;

        return $this;
    }

    /**
     * @return int
     */
    public function getBatchID()
    {
        return $this->BatchID;
    }

    /**
     * @param int $batchSequenceNumber
     *
     * @return CloseCurrentCardBatchDetail
     */
    public function setBatchSequenceNumber($batchSequenceNumber)
    {
        $this->BatchSequenceNumber = $batchSequenceNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getBatchSequenceNumber()
    {
        return $this->BatchSequenceNumber;
    }

    /**
     * @param float $totalAmount
     *
     * @return CloseCurrentCardBatchDetail
     */
    public function setTotalAmount($totalAmount)
    {
        $this->TotalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param int $transactionCount
     *
     * @return CloseCurrentCardBatchDetail
     */
    public function setTransactionCount($transactionCount)
    {
        $this->TransactionCount = $transactionCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionCount()
    {
        return $this->TransactionCount;
    }
}
