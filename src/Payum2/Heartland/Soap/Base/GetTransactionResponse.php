<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetTransactionResponse extends Response
{
    /**
     * MerchantName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MerchantName = null;

    /**
     * Transaction
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TransactionRecordWithAuthorizations
     *
     * @var TransactionRecordWithAuthorizations
     */
    protected $Transaction = null;

    /**
     * @param string $merchantName
     *
     * @return GetTransactionResponse
     */
    public function setMerchantName($merchantName)
    {
        $this->MerchantName = $merchantName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
        return $this->MerchantName;
    }

    /**
     * @param TransactionRecordWithAuthorizations $transaction
     *
     * @return GetTransactionResponse
     */
    public function setTransaction(TransactionRecordWithAuthorizations $transaction)
    {
        $this->Transaction = $transaction;

        return $this;
    }

    /**
     * @return TransactionRecordWithAuthorizations
     */
    public function getTransaction()
    {
        if (null === $this->Transaction) {
            $this->Transaction = new TransactionRecordWithAuthorizations();
        }

        return $this->Transaction;
    }
}
