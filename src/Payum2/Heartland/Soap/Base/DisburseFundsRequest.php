<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class DisburseFundsRequest extends MerchantRequest
{
    /**
     * ACHAccountToDisburseTo
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ACHAccountToCharge
     *
     * @var ACHAccountToCharge
     */
    protected $ACHAccountToDisburseTo = null;

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
     * @param ACHAccountToCharge $aCHAccountToDisburseTo
     *
     * @return DisburseFundsRequest
     */
    public function setACHAccountToDisburseTo(ACHAccountToCharge $aCHAccountToDisburseTo)
    {
        $this->ACHAccountToDisburseTo = $aCHAccountToDisburseTo;

        return $this;
    }

    /**
     * @return ACHAccountToCharge
     */
    public function getACHAccountToDisburseTo()
    {
        if (null === $this->ACHAccountToDisburseTo) {
            $this->ACHAccountToDisburseTo = new ACHAccountToCharge();
        }

        return $this->ACHAccountToDisburseTo;
    }

    /**
     * @param ArrayOfBillTransaction $billTransactions
     *
     * @return DisburseFundsRequest
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
     * @return DisburseFundsRequest
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
     * @return DisburseFundsRequest
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
     * @param Language $language
     *
     * @return DisburseFundsRequest
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
     * @return DisburseFundsRequest
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
     * @return DisburseFundsRequest
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
}
