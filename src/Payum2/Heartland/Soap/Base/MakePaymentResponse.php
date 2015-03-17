<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class MakePaymentResponse extends GetFileResponse
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
     * MakePaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q24:MakePaymentResponse
     *
     * @var MakePaymentResponse
     */
    protected $MakePaymentResult = null;

    /**
     * @param ArrayOfAuthorization $authorizations
     *
     * @return MakePaymentResponse
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
     * @return MakePaymentResponse
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
     * @return MakePaymentResponse
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
     * @param MakePaymentResponse $makePaymentResult
     *
     * @return MakePaymentResponse
     */
    public function setMakePaymentResult(MakePaymentResponse $makePaymentResult)
    {
        $this->MakePaymentResult = $makePaymentResult;

        return $this;
    }

    /**
     * @return MakePaymentResponse
     */
    public function getMakePaymentResult()
    {
        if (null === $this->MakePaymentResult) {
            $this->MakePaymentResult = new MakePaymentResponse();
        }

        return $this->MakePaymentResult;
    }
}
