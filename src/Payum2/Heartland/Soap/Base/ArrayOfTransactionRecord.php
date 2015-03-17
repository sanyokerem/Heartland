<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfTransactionRecord
{
    /**
     * TransactionRecord
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TransactionRecord
     *
     * @var array(TransactionRecord)
     */
    protected $TransactionRecord = null;

    /**
     * @param array(TransactionRecord) $transactionRecord
     *
     * @return ArrayOfTransactionRecord
     */
    public function setTransactionRecord($transactionRecord)
    {
        $this->TransactionRecord = $transactionRecord;

        return $this;
    }

    /**
     * @return array(TransactionRecord)
     */
    public function getTransactionRecord()
    {
        return $this->TransactionRecord;
    }
}
