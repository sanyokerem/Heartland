<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class SecurePayBill
{
    /**
     * Amount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $Amount;

    /**
     * BillTypeName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $BillTypeName = null;

    /**
     * Identifier1
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Identifier1 = null;

    /**
     * Identifier2
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Identifier2 = null;

    /**
     * Identifier3
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Identifier3 = null;

    /**
     * Identifier4
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Identifier4 = null;

    /**
     * @param float $amount
     *
     * @return SecurePayBill
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param string $billTypeName
     *
     * @return SecurePayBill
     */
    public function setBillTypeName($billTypeName)
    {
        $this->BillTypeName = $billTypeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillTypeName()
    {
        return $this->BillTypeName;
    }

    /**
     * @param string $identifier1
     *
     * @return SecurePayBill
     */
    public function setIdentifier1($identifier1)
    {
        $this->Identifier1 = $identifier1;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier1()
    {
        return $this->Identifier1;
    }

    /**
     * @param string $identifier2
     *
     * @return SecurePayBill
     */
    public function setIdentifier2($identifier2)
    {
        $this->Identifier2 = $identifier2;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier2()
    {
        return $this->Identifier2;
    }

    /**
     * @param string $identifier3
     *
     * @return SecurePayBill
     */
    public function setIdentifier3($identifier3)
    {
        $this->Identifier3 = $identifier3;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier3()
    {
        return $this->Identifier3;
    }

    /**
     * @param string $identifier4
     *
     * @return SecurePayBill
     */
    public function setIdentifier4($identifier4)
    {
        $this->Identifier4 = $identifier4;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier4()
    {
        return $this->Identifier4;
    }
}
