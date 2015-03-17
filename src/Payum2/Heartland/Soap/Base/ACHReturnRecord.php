<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ACHReturnRecord
{
    /**
     * Bills
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfBillTransaction
     *
     * @var ArrayOfBillTransaction
     */
    protected $Bills = null;

    /**
     * ReturnType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ReturnType = null;

    /**
     * ReturnTypeDescription
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ReturnTypeDescription = null;

    /**
     * TransactionInfo
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Transaction
     *
     * @var Transaction
     */
    protected $TransactionInfo = null;

    /**
     * Transaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $Transaction_ID;

    /**
     * @param ArrayOfBillTransaction $bills
     *
     * @return ACHReturnRecord
     */
    public function setBills(ArrayOfBillTransaction $bills)
    {
        $this->Bills = $bills;

        return $this;
    }

    /**
     * @return ArrayOfBillTransaction
     */
    public function getBills()
    {
        if (null === $this->Bills) {
            $this->Bills = new ArrayOfBillTransaction();
        }

        return $this->Bills;
    }

    /**
     * @param string $returnType
     *
     * @return ACHReturnRecord
     */
    public function setReturnType($returnType)
    {
        $this->ReturnType = $returnType;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }

    /**
     * @param string $returnTypeDescription
     *
     * @return ACHReturnRecord
     */
    public function setReturnTypeDescription($returnTypeDescription)
    {
        $this->ReturnTypeDescription = $returnTypeDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnTypeDescription()
    {
        return $this->ReturnTypeDescription;
    }

    /**
     * @param Transaction $transactionInfo
     *
     * @return ACHReturnRecord
     */
    public function setTransactionInfo(Transaction $transactionInfo)
    {
        $this->TransactionInfo = $transactionInfo;

        return $this;
    }

    /**
     * @return Transaction
     */
    public function getTransactionInfo()
    {
        if (null === $this->TransactionInfo) {
            $this->TransactionInfo = new Transaction();
        }

        return $this->TransactionInfo;
    }

    /**
     * @param int $transaction_ID
     *
     * @return ACHReturnRecord
     */
    public function setTransaction_ID($transaction_ID)
    {
        $this->Transaction_ID = $transaction_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransaction_ID()
    {
        return $this->Transaction_ID;
    }
}
