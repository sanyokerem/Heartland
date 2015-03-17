<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfBillTransactionRecord
{
    /**
     * BillTransactionRecord
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillTransactionRecord
     *
     * @var array(BillTransactionRecord)
     */
    protected $BillTransactionRecord = null;

    /**
     * @param array(BillTransactionRecord) $billTransactionRecord
     *
     * @return ArrayOfBillTransactionRecord
     */
    public function setBillTransactionRecord($billTransactionRecord)
    {
        $this->BillTransactionRecord = $billTransactionRecord;

        return $this;
    }

    /**
     * @return array(BillTransactionRecord)
     */
    public function getBillTransactionRecord()
    {
        return $this->BillTransactionRecord;
    }
}
