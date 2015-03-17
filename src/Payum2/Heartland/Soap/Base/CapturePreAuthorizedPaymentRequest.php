<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class CapturePreAuthorizedPaymentRequest extends MerchantRequest
{
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
     * CustomerEmailAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEmailAddress = null;

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
     * IncludeReceiptInResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $IncludeReceiptInResponse;

    /**
     * Language
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Language
     *
     * @var Language
     */
    protected $Language;

    /**
     * OrderID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $OrderID = null;

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
     * TransactionAuthorization_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $TransactionAuthorization_ID;

    /**
     * @param ArrayOfBillTransaction $billTransactions
     *
     * @return CapturePreAuthorizedPaymentRequest
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
     * @param string $customerEmailAddress
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setCustomerEmailAddress($customerEmailAddress)
    {
        $this->CustomerEmailAddress = $customerEmailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmailAddress()
    {
        return $this->CustomerEmailAddress;
    }

    /**
     * @param string $endUserBrowserType
     *
     * @return CapturePreAuthorizedPaymentRequest
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
     * @return CapturePreAuthorizedPaymentRequest
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
     * @param boolean $includeReceiptInResponse
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setIncludeReceiptInResponse($includeReceiptInResponse)
    {
        $this->IncludeReceiptInResponse = $includeReceiptInResponse;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeReceiptInResponse()
    {
        return $this->IncludeReceiptInResponse;
    }

    /**
     * @param Language $language
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $orderID
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setOrderID($orderID)
    {
        $this->OrderID = $orderID;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * @param Transaction $transaction
     *
     * @return CapturePreAuthorizedPaymentRequest
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
     * @param int $transactionAuthorization_ID
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setTransactionAuthorization_ID($transactionAuthorization_ID)
    {
        $this->TransactionAuthorization_ID = $transactionAuthorization_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionAuthorization_ID()
    {
        return $this->TransactionAuthorization_ID;
    }
}
