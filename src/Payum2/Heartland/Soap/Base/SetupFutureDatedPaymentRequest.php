<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class SetupFutureDatedPaymentRequest extends MerchantRequest
{
    /**
     * ACHAccountsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfACHAccountToCharge
     *
     * @var ArrayOfACHAccountToCharge
     */
    protected $ACHAccountsToCharge = null;

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
     * ClearTextCreditCardsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfClearTextCardToCharge
     *
     * @var ArrayOfClearTextCardToCharge
     */
    protected $ClearTextCreditCardsToCharge = null;

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
     * TokensToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfTokenToCharge
     *
     * @var ArrayOfTokenToCharge
     */
    protected $TokensToCharge = null;

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
     * @param ArrayOfACHAccountToCharge $aCHAccountsToCharge
     *
     * @return SetupFutureDatedPaymentRequest
     */
    public function setACHAccountsToCharge(ArrayOfACHAccountToCharge $aCHAccountsToCharge)
    {
        $this->ACHAccountsToCharge = $aCHAccountsToCharge;

        return $this;
    }

    /**
     * @return ArrayOfACHAccountToCharge
     */
    public function getACHAccountsToCharge()
    {
        if (null === $this->ACHAccountsToCharge) {
            $this->ACHAccountsToCharge = new ArrayOfACHAccountToCharge();
        }

        return $this->ACHAccountsToCharge;
    }

    /**
     * @param ArrayOfBillTransaction $billTransactions
     *
     * @return SetupFutureDatedPaymentRequest
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
     * @param ArrayOfClearTextCardToCharge $clearTextCreditCardsToCharge
     *
     * @return SetupFutureDatedPaymentRequest
     */
    public function setClearTextCreditCardsToCharge(ArrayOfClearTextCardToCharge $clearTextCreditCardsToCharge)
    {
        $this->ClearTextCreditCardsToCharge = $clearTextCreditCardsToCharge;

        return $this;
    }

    /**
     * @return ArrayOfClearTextCardToCharge
     */
    public function getClearTextCreditCardsToCharge()
    {
        if (null === $this->ClearTextCreditCardsToCharge) {
            $this->ClearTextCreditCardsToCharge = new ArrayOfClearTextCardToCharge();
        }

        return $this->ClearTextCreditCardsToCharge;
    }

    /**
     * @param string $endUserBrowserType
     *
     * @return SetupFutureDatedPaymentRequest
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
     * @return SetupFutureDatedPaymentRequest
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
     * @param ArrayOfTokenToCharge $tokensToCharge
     *
     * @return SetupFutureDatedPaymentRequest
     */
    public function setTokensToCharge(ArrayOfTokenToCharge $tokensToCharge)
    {
        $this->TokensToCharge = $tokensToCharge;

        return $this;
    }

    /**
     * @return ArrayOfTokenToCharge
     */
    public function getTokensToCharge()
    {
        if (null === $this->TokensToCharge) {
            $this->TokensToCharge = new ArrayOfTokenToCharge();
        }

        return $this->TokensToCharge;
    }

    /**
     * @param Transaction $transaction
     *
     * @return SetupFutureDatedPaymentRequest
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
