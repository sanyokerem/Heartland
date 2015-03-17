<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AddTransactionRequest extends MerchantRequest
{
    /**
     * Authorizations
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfAuthorization
     *
     * @var ArrayOfAuthorization
     */
    protected $Authorizations = null;

    /**
     * BillTransactions
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfBillTransaction
     *
     * @var ArrayOfBillTransaction
     */
    protected $BillTransactions = null;

    /**
     * EndUserBrowserType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $EndUserBrowserType = null;

    /**
     * EndUserIPAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $EndUserIPAddress = null;

    /**
     * TimeZone
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Timezone
     *
     * @var Timezone
     */
    protected $TimeZone;

    /**
     * Transaction
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Transaction
     *
     * @var Transaction
     */
    protected $Transaction = null;

    /**
     * UseSystemDateForTransactionDateTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $UseSystemDateForTransactionDateTime;

    /**
     * @param ArrayOfAuthorization $authorizations
     *
     * @return AddTransactionRequest
     */
    public function setAuthorizations(ArrayOfAuthorization $authorizations)
    {
        $this->Authorizations = $authorizations;

        return $this;
    }

    /**
     * @return ArrayOfAuthorization
     */
    public function getAuthorizations()
    {
        if (null === $this->Authorizations) {
            $this->Authorizations = new ArrayOfAuthorization();
        }

        return $this->Authorizations;
    }

    /**
     * @param ArrayOfBillTransaction $billTransactions
     *
     * @return AddTransactionRequest
     */
    public function setBillTransactions(ArrayOfBillTransaction $billTransactions)
    {
        $this->BillTransactions = $billTransactions;

        return $this;
    }

    /**
     * @return ArrayOfBillTransaction
     */
    public function getBillTransactions()
    {
        if (null === $this->BillTransactions) {
            $this->BillTransactions = new ArrayOfBillTransaction();
        }

        return $this->BillTransactions;
    }

    /**
     * @param string $endUserBrowserType
     *
     * @return AddTransactionRequest
     */
    public function setEndUserBrowserType($endUserBrowserType)
    {
        $this->EndUserBrowserType = $endUserBrowserType;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndUserBrowserType()
    {
        return $this->EndUserBrowserType;
    }

    /**
     * @param string $endUserIPAddress
     *
     * @return AddTransactionRequest
     */
    public function setEndUserIPAddress($endUserIPAddress)
    {
        $this->EndUserIPAddress = $endUserIPAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndUserIPAddress()
    {
        return $this->EndUserIPAddress;
    }

    /**
     * @param Timezone $timeZone
     *
     * @return AddTransactionRequest
     */
    public function setTimeZone($timeZone)
    {
        $this->TimeZone = $timeZone;

        return $this;
    }

    /**
     * @return Timezone
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param Transaction $transaction
     *
     * @return AddTransactionRequest
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->Transaction = $transaction;

        return $this;
    }

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        if (null === $this->Transaction) {
            $this->Transaction = new Transaction();
        }

        return $this->Transaction;
    }

    /**
     * @param boolean $useSystemDateForTransactionDateTime
     *
     * @return AddTransactionRequest
     */
    public function setUseSystemDateForTransactionDateTime($useSystemDateForTransactionDateTime)
    {
        $this->UseSystemDateForTransactionDateTime = $useSystemDateForTransactionDateTime;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getUseSystemDateForTransactionDateTime()
    {
        return $this->UseSystemDateForTransactionDateTime;
    }
}
