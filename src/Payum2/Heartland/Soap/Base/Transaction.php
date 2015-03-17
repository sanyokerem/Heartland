<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Transaction
{
    /**
     * Amount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $Amount;

    /**
     * FeeAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $FeeAmount = null;

    /**
     * MerchantInvoiceNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MerchantInvoiceNumber = null;

    /**
     * MerchantPONumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MerchantPONumber = null;

    /**
     * MerchantTransactionDescription
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MerchantTransactionDescription = null;

    /**
     * MerchantTransactionID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MerchantTransactionID = null;

    /**
     * PayorAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorAddress = null;

    /**
     * PayorCity
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorCity = null;

    /**
     * PayorCountry
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorCountry = null;

    /**
     * PayorEmailAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorEmailAddress = null;

    /**
     * PayorFirstName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorFirstName = null;

    /**
     * PayorLastName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorLastName = null;

    /**
     * PayorMiddleName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorMiddleName = null;

    /**
     * PayorPhoneNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorPhoneNumber = null;

    /**
     * PayorPostalCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorPostalCode = null;

    /**
     * PayorState
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorState = null;

    /**
     * ReferenceTransactionID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ReferenceTransactionID = null;

    /**
     * TransactionDate
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    protected $TransactionDate;

    /**
     * @param float $amount
     *
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $feeAmount
     *
     * @return Transaction
     */
    public function setFeeAmount($feeAmount)
    {
        $this->FeeAmount = $feeAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }

    /**
     * @param string $merchantInvoiceNumber
     *
     * @return Transaction
     */
    public function setMerchantInvoiceNumber($merchantInvoiceNumber)
    {
        $this->MerchantInvoiceNumber = $merchantInvoiceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantInvoiceNumber()
    {
        return $this->MerchantInvoiceNumber;
    }

    /**
     * @param string $merchantPONumber
     *
     * @return Transaction
     */
    public function setMerchantPONumber($merchantPONumber)
    {
        $this->MerchantPONumber = $merchantPONumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantPONumber()
    {
        return $this->MerchantPONumber;
    }

    /**
     * @param string $merchantTransactionDescription
     *
     * @return Transaction
     */
    public function setMerchantTransactionDescription($merchantTransactionDescription)
    {
        $this->MerchantTransactionDescription = $merchantTransactionDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantTransactionDescription()
    {
        return $this->MerchantTransactionDescription;
    }

    /**
     * @param string $merchantTransactionID
     *
     * @return Transaction
     */
    public function setMerchantTransactionID($merchantTransactionID)
    {
        $this->MerchantTransactionID = $merchantTransactionID;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantTransactionID()
    {
        return $this->MerchantTransactionID;
    }

    /**
     * @param string $payorAddress
     *
     * @return Transaction
     */
    public function setPayorAddress($payorAddress)
    {
        $this->PayorAddress = $payorAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorAddress()
    {
        return $this->PayorAddress;
    }

    /**
     * @param string $payorCity
     *
     * @return Transaction
     */
    public function setPayorCity($payorCity)
    {
        $this->PayorCity = $payorCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorCity()
    {
        return $this->PayorCity;
    }

    /**
     * @param string $payorCountry
     *
     * @return Transaction
     */
    public function setPayorCountry($payorCountry)
    {
        $this->PayorCountry = $payorCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorCountry()
    {
        return $this->PayorCountry;
    }

    /**
     * @param string $payorEmailAddress
     *
     * @return Transaction
     */
    public function setPayorEmailAddress($payorEmailAddress)
    {
        $this->PayorEmailAddress = $payorEmailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorEmailAddress()
    {
        return $this->PayorEmailAddress;
    }

    /**
     * @param string $payorFirstName
     *
     * @return Transaction
     */
    public function setPayorFirstName($payorFirstName)
    {
        $this->PayorFirstName = $payorFirstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorFirstName()
    {
        return $this->PayorFirstName;
    }

    /**
     * @param string $payorLastName
     *
     * @return Transaction
     */
    public function setPayorLastName($payorLastName)
    {
        $this->PayorLastName = $payorLastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorLastName()
    {
        return $this->PayorLastName;
    }

    /**
     * @param string $payorMiddleName
     *
     * @return Transaction
     */
    public function setPayorMiddleName($payorMiddleName)
    {
        $this->PayorMiddleName = $payorMiddleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorMiddleName()
    {
        return $this->PayorMiddleName;
    }

    /**
     * @param string $payorPhoneNumber
     *
     * @return Transaction
     */
    public function setPayorPhoneNumber($payorPhoneNumber)
    {
        $this->PayorPhoneNumber = $payorPhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorPhoneNumber()
    {
        return $this->PayorPhoneNumber;
    }

    /**
     * @param string $payorPostalCode
     *
     * @return Transaction
     */
    public function setPayorPostalCode($payorPostalCode)
    {
        $this->PayorPostalCode = $payorPostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorPostalCode()
    {
        return $this->PayorPostalCode;
    }

    /**
     * @param string $payorState
     *
     * @return Transaction
     */
    public function setPayorState($payorState)
    {
        $this->PayorState = $payorState;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorState()
    {
        return $this->PayorState;
    }

    /**
     * @param int $referenceTransactionID
     *
     * @return Transaction
     */
    public function setReferenceTransactionID($referenceTransactionID)
    {
        $this->ReferenceTransactionID = $referenceTransactionID;

        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceTransactionID()
    {
        return $this->ReferenceTransactionID;
    }

    /**
     * @param string $transactionDate
     *
     * @return Transaction
     */
    public function setTransactionDate($transactionDate)
    {
        $this->TransactionDate = $transactionDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->TransactionDate;
    }
}
