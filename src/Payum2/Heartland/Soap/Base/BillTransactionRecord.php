<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class BillTransactionRecord extends BillTransaction
{
    /**
     * BillTypeLabels
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillTypeLabels
     *
     * @var BillTypeLabels
     */
    protected $BillTypeLabels = null;

    /**
     * DataElement1
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement1 = null;

    /**
     * DataElement2
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement2 = null;

    /**
     * DataElement3
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement3 = null;

    /**
     * DataElement4
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement4 = null;

    /**
     * DataElement5
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement5 = null;

    /**
     * DataElement6
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement6 = null;

    /**
     * DataElement7
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement7 = null;

    /**
     * DataElement8
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement8 = null;

    /**
     * DataElement9
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DataElement9 = null;

    /**
     * NetAmountToApplyToBill
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $NetAmountToApplyToBill;

    /**
     * @param BillTypeLabels $billTypeLabels
     *
     * @return BillTransactionRecord
     */
    public function setBillTypeLabels(BillTypeLabels $billTypeLabels)
    {
        $this->BillTypeLabels = $billTypeLabels;

        return $this;
    }

    /**
     * @return BillTypeLabels
     */
    public function getBillTypeLabels()
    {
        if (null === $this->BillTypeLabels) {
            $this->BillTypeLabels = new BillTypeLabels();
        }

        return $this->BillTypeLabels;
    }

    /**
     * @param string $dataElement1
     *
     * @return BillTransactionRecord
     */
    public function setDataElement1($dataElement1)
    {
        $this->DataElement1 = $dataElement1;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement1()
    {
        return $this->DataElement1;
    }

    /**
     * @param string $dataElement2
     *
     * @return BillTransactionRecord
     */
    public function setDataElement2($dataElement2)
    {
        $this->DataElement2 = $dataElement2;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement2()
    {
        return $this->DataElement2;
    }

    /**
     * @param string $dataElement3
     *
     * @return BillTransactionRecord
     */
    public function setDataElement3($dataElement3)
    {
        $this->DataElement3 = $dataElement3;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement3()
    {
        return $this->DataElement3;
    }

    /**
     * @param string $dataElement4
     *
     * @return BillTransactionRecord
     */
    public function setDataElement4($dataElement4)
    {
        $this->DataElement4 = $dataElement4;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement4()
    {
        return $this->DataElement4;
    }

    /**
     * @param string $dataElement5
     *
     * @return BillTransactionRecord
     */
    public function setDataElement5($dataElement5)
    {
        $this->DataElement5 = $dataElement5;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement5()
    {
        return $this->DataElement5;
    }

    /**
     * @param string $dataElement6
     *
     * @return BillTransactionRecord
     */
    public function setDataElement6($dataElement6)
    {
        $this->DataElement6 = $dataElement6;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement6()
    {
        return $this->DataElement6;
    }

    /**
     * @param string $dataElement7
     *
     * @return BillTransactionRecord
     */
    public function setDataElement7($dataElement7)
    {
        $this->DataElement7 = $dataElement7;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement7()
    {
        return $this->DataElement7;
    }

    /**
     * @param string $dataElement8
     *
     * @return BillTransactionRecord
     */
    public function setDataElement8($dataElement8)
    {
        $this->DataElement8 = $dataElement8;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement8()
    {
        return $this->DataElement8;
    }

    /**
     * @param string $dataElement9
     *
     * @return BillTransactionRecord
     */
    public function setDataElement9($dataElement9)
    {
        $this->DataElement9 = $dataElement9;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataElement9()
    {
        return $this->DataElement9;
    }

    /**
     * @param float $netAmountToApplyToBill
     *
     * @return BillTransactionRecord
     */
    public function setNetAmountToApplyToBill($netAmountToApplyToBill)
    {
        $this->NetAmountToApplyToBill = $netAmountToApplyToBill;

        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmountToApplyToBill()
    {
        return $this->NetAmountToApplyToBill;
    }
}
