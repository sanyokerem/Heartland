<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfBillTransaction
{
    /**
     * BillTransaction
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillTransaction
     *
     * @var array(BillTransaction)
     */
    protected $BillTransaction = null;

    /**
     * @param array(BillTransaction) $billTransaction
     *
     * @return ArrayOfBillTransaction
     */
    public function setBillTransaction($billTransaction)
    {
        $this->BillTransaction = $billTransaction;

        return $this;
    }

    /**
     * @return array(BillTransaction)
     */
    public function getBillTransaction()
    {
        return $this->BillTransaction;
    }
}
