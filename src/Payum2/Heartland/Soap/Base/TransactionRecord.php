<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class TransactionRecord extends Transaction
{
    /**
     * Application
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Application
     *
     * @var Application
     */
    protected $Application;

    /**
     * BillTransactions
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfBillTransactionRecord
     *
     * @var ArrayOfBillTransactionRecord
     */
    protected $BillTransactions = null;

    /**
     * NetAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $NetAmount;

    /**
     * NetFeeAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $NetFeeAmount;

    /**
     * OriginalTransactionID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $OriginalTransactionID = null;

    /**
     * ReversalCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReversalCode
     *
     * @var ReversalCode
     */
    protected $ReversalCode;

    /**
     * TransactionID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $TransactionID;

    /**
     * TransactionType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TransactionType
     *
     * @var TransactionType
     */
    protected $TransactionType;

    /**
     * UserName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $UserName = null;

    /**
     * @param Application $application
     *
     * @return TransactionRecord
     */
    public function setApplication($application)
    {
        $this->Application = $application;

        return $this;
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->Application;
    }

    /**
     * @param ArrayOfBillTransactionRecord $billTransactions
     *
     * @return TransactionRecord
     */
    public function setBillTransactions(ArrayOfBillTransactionRecord $billTransactions)
    {
        $this->BillTransactions = $billTransactions;

        return $this;
    }

    /**
     * @return ArrayOfBillTransactionRecord
     */
    public function getBillTransactions()
    {
        if (null === $this->BillTransactions) {
            $this->BillTransactions = new ArrayOfBillTransactionRecord();
        }

        return $this->BillTransactions;
    }

    /**
     * @param float $netAmount
     *
     * @return TransactionRecord
     */
    public function setNetAmount($netAmount)
    {
        $this->NetAmount = $netAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }

    /**
     * @param float $netFeeAmount
     *
     * @return TransactionRecord
     */
    public function setNetFeeAmount($netFeeAmount)
    {
        $this->NetFeeAmount = $netFeeAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getNetFeeAmount()
    {
        return $this->NetFeeAmount;
    }

    /**
     * @param int $originalTransactionID
     *
     * @return TransactionRecord
     */
    public function setOriginalTransactionID($originalTransactionID)
    {
        $this->OriginalTransactionID = $originalTransactionID;

        return $this;
    }

    /**
     * @return int
     */
    public function getOriginalTransactionID()
    {
        return $this->OriginalTransactionID;
    }

    /**
     * @param ReversalCode $reversalCode
     *
     * @return TransactionRecord
     */
    public function setReversalCode($reversalCode)
    {
        $this->ReversalCode = $reversalCode;

        return $this;
    }

    /**
     * @return ReversalCode
     */
    public function getReversalCode()
    {
        return $this->ReversalCode;
    }

    /**
     * @param int $transactionID
     *
     * @return TransactionRecord
     */
    public function setTransactionID($transactionID)
    {
        $this->TransactionID = $transactionID;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }

    /**
     * @param TransactionType $transactionType
     *
     * @return TransactionRecord
     */
    public function setTransactionType($transactionType)
    {
        $this->TransactionType = $transactionType;

        return $this;
    }

    /**
     * @return TransactionType
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }

    /**
     * @param string $userName
     *
     * @return TransactionRecord
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }
}
