<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class DisburseFundsResponse extends Response
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
     * Transaction
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Transaction
     *
     * @var Transaction
     */
    protected $Transaction = null;

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
     * DisburseFundsResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q68:DisburseFundsResponse
     *
     * @var DisburseFundsResponse
     */
    protected $DisburseFundsResult = null;

    /**
     * @param ArrayOfAuthorization $authorizations
     *
     * @return DisburseFundsResponse
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
     * @param Transaction $transaction
     *
     * @return DisburseFundsResponse
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
     * @param int $transaction_ID
     *
     * @return DisburseFundsResponse
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

    /**
     * @param DisburseFundsResponse $disburseFundsResult
     *
     * @return DisburseFundsResponse
     */
    public function setDisburseFundsResult(DisburseFundsResponse $disburseFundsResult)
    {
        $this->DisburseFundsResult = $disburseFundsResult;

        return $this;
    }

    /**
     * @return DisburseFundsResponse
     */
    public function getDisburseFundsResult()
    {
        if (null === $this->DisburseFundsResult) {
            $this->DisburseFundsResult = new DisburseFundsResponse();
        }

        return $this->DisburseFundsResult;
    }
}
