<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class BillIdentifier
{
    /**
     * BillType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $BillType = null;

    /**
     * ID1
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ID1 = null;

    /**
     * ID2
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ID2 = null;

    /**
     * ID3
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ID3 = null;

    /**
     * ID4
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ID4 = null;

    /**
     * @param string $billType
     *
     * @return BillIdentifier
     */
    public function setBillType($billType)
    {
        $this->BillType = $billType;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillType()
    {
        return $this->BillType;
    }

    /**
     * @param string $iD1
     *
     * @return BillIdentifier
     */
    public function setID1($iD1)
    {
        $this->ID1 = $iD1;

        return $this;
    }

    /**
     * @return string
     */
    public function getID1()
    {
        return $this->ID1;
    }

    /**
     * @param string $iD2
     *
     * @return BillIdentifier
     */
    public function setID2($iD2)
    {
        $this->ID2 = $iD2;

        return $this;
    }

    /**
     * @return string
     */
    public function getID2()
    {
        return $this->ID2;
    }

    /**
     * @param string $iD3
     *
     * @return BillIdentifier
     */
    public function setID3($iD3)
    {
        $this->ID3 = $iD3;

        return $this;
    }

    /**
     * @return string
     */
    public function getID3()
    {
        return $this->ID3;
    }

    /**
     * @param string $iD4
     *
     * @return BillIdentifier
     */
    public function setID4($iD4)
    {
        $this->ID4 = $iD4;

        return $this;
    }

    /**
     * @return string
     */
    public function getID4()
    {
        return $this->ID4;
    }
}
