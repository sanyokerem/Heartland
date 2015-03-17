<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class BillTransaction extends BillIdentifier
{
    /**
     * AmountToApplyToBill
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $AmountToApplyToBill;

    /**
     * CustomerEnteredElement1
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement1 = null;

    /**
     * CustomerEnteredElement2
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement2 = null;

    /**
     * CustomerEnteredElement3
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement3 = null;

    /**
     * CustomerEnteredElement4
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement4 = null;

    /**
     * CustomerEnteredElement5
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement5 = null;

    /**
     * CustomerEnteredElement6
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement6 = null;

    /**
     * CustomerEnteredElement7
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement7 = null;

    /**
     * CustomerEnteredElement8
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement8 = null;

    /**
     * CustomerEnteredElement9
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CustomerEnteredElement9 = null;

    /**
     * @param float $amountToApplyToBill
     *
     * @return BillTransaction
     */
    public function setAmountToApplyToBill($amountToApplyToBill)
    {
        $this->AmountToApplyToBill = $amountToApplyToBill;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmountToApplyToBill()
    {
        return $this->AmountToApplyToBill;
    }

    /**
     * @param string $customerEnteredElement1
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement1($customerEnteredElement1)
    {
        $this->CustomerEnteredElement1 = $customerEnteredElement1;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement1()
    {
        return $this->CustomerEnteredElement1;
    }

    /**
     * @param string $customerEnteredElement2
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement2($customerEnteredElement2)
    {
        $this->CustomerEnteredElement2 = $customerEnteredElement2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement2()
    {
        return $this->CustomerEnteredElement2;
    }

    /**
     * @param string $customerEnteredElement3
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement3($customerEnteredElement3)
    {
        $this->CustomerEnteredElement3 = $customerEnteredElement3;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement3()
    {
        return $this->CustomerEnteredElement3;
    }

    /**
     * @param string $customerEnteredElement4
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement4($customerEnteredElement4)
    {
        $this->CustomerEnteredElement4 = $customerEnteredElement4;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement4()
    {
        return $this->CustomerEnteredElement4;
    }

    /**
     * @param string $customerEnteredElement5
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement5($customerEnteredElement5)
    {
        $this->CustomerEnteredElement5 = $customerEnteredElement5;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement5()
    {
        return $this->CustomerEnteredElement5;
    }

    /**
     * @param string $customerEnteredElement6
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement6($customerEnteredElement6)
    {
        $this->CustomerEnteredElement6 = $customerEnteredElement6;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement6()
    {
        return $this->CustomerEnteredElement6;
    }

    /**
     * @param string $customerEnteredElement7
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement7($customerEnteredElement7)
    {
        $this->CustomerEnteredElement7 = $customerEnteredElement7;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement7()
    {
        return $this->CustomerEnteredElement7;
    }

    /**
     * @param string $customerEnteredElement8
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement8($customerEnteredElement8)
    {
        $this->CustomerEnteredElement8 = $customerEnteredElement8;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement8()
    {
        return $this->CustomerEnteredElement8;
    }

    /**
     * @param string $customerEnteredElement9
     *
     * @return BillTransaction
     */
    public function setCustomerEnteredElement9($customerEnteredElement9)
    {
        $this->CustomerEnteredElement9 = $customerEnteredElement9;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEnteredElement9()
    {
        return $this->CustomerEnteredElement9;
    }
}
