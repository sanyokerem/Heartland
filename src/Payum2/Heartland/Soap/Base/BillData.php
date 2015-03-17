<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class BillData
{
    /**
     * BillIdentifier
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillIdentifier
     *
     * @var BillIdentifier
     */
    protected $BillIdentifier = null;

    /**
     * BillPresentment
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillPresentment
     *
     * @var BillPresentment
     */
    protected $BillPresentment;

    /**
     * CustomerAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Address
     *
     * @var Address
     */
    protected $CustomerAddress = null;

    /**
     * DataElements
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillDataElements
     *
     * @var BillDataElements
     */
    protected $DataElements = null;

    /**
     * DueDate
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    protected $DueDate;

    /**
     * ObligorEmailAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ObligorEmailAddress = null;

    /**
     * ObligorFirstName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ObligorFirstName = null;

    /**
     * ObligorLastName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ObligorLastName = null;

    /**
     * ObligorMiddleName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ObligorMiddleName = null;

    /**
     * ObligorPhoneNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ObligorPhoneNumber = null;

    /**
     * OptionalAmounts
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:OptionalBillAmounts
     *
     * @var OptionalBillAmounts
     */
    protected $OptionalAmounts = null;

    /**
     * @param BillIdentifier $billIdentifier
     *
     * @return BillData
     */
    public function setBillIdentifier(BillIdentifier $billIdentifier)
    {
        $this->BillIdentifier = $billIdentifier;

        return $this;
    }

    /**
     * @return BillIdentifier
     */
    public function getBillIdentifier()
    {
        if (null === $this->BillIdentifier) {
            $this->BillIdentifier = new BillIdentifier();
        }

        return $this->BillIdentifier;
    }

    /**
     * @param BillPresentment $billPresentment
     *
     * @return BillData
     */
    public function setBillPresentment($billPresentment)
    {
        $this->BillPresentment = $billPresentment;

        return $this;
    }

    /**
     * @return BillPresentment
     */
    public function getBillPresentment()
    {
        return $this->BillPresentment;
    }

    /**
     * @param Address $customerAddress
     *
     * @return BillData
     */
    public function setCustomerAddress(Address $customerAddress)
    {
        $this->CustomerAddress = $customerAddress;

        return $this;
    }

    /**
     * @return Address
     */
    public function getCustomerAddress()
    {
        if (null === $this->CustomerAddress) {
            $this->CustomerAddress = new Address();
        }

        return $this->CustomerAddress;
    }

    /**
     * @param BillDataElements $dataElements
     *
     * @return BillData
     */
    public function setDataElements(BillDataElements $dataElements)
    {
        $this->DataElements = $dataElements;

        return $this;
    }

    /**
     * @return BillDataElements
     */
    public function getDataElements()
    {
        if (null === $this->DataElements) {
            $this->DataElements = new BillDataElements();
        }

        return $this->DataElements;
    }

    /**
     * @param string $dueDate
     *
     * @return BillData
     */
    public function setDueDate($dueDate)
    {
        $this->DueDate = $dueDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }

    /**
     * @param string $obligorEmailAddress
     *
     * @return BillData
     */
    public function setObligorEmailAddress($obligorEmailAddress)
    {
        $this->ObligorEmailAddress = $obligorEmailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getObligorEmailAddress()
    {
        return $this->ObligorEmailAddress;
    }

    /**
     * @param string $obligorFirstName
     *
     * @return BillData
     */
    public function setObligorFirstName($obligorFirstName)
    {
        $this->ObligorFirstName = $obligorFirstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getObligorFirstName()
    {
        return $this->ObligorFirstName;
    }

    /**
     * @param string $obligorLastName
     *
     * @return BillData
     */
    public function setObligorLastName($obligorLastName)
    {
        $this->ObligorLastName = $obligorLastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getObligorLastName()
    {
        return $this->ObligorLastName;
    }

    /**
     * @param string $obligorMiddleName
     *
     * @return BillData
     */
    public function setObligorMiddleName($obligorMiddleName)
    {
        $this->ObligorMiddleName = $obligorMiddleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getObligorMiddleName()
    {
        return $this->ObligorMiddleName;
    }

    /**
     * @param string $obligorPhoneNumber
     *
     * @return BillData
     */
    public function setObligorPhoneNumber($obligorPhoneNumber)
    {
        $this->ObligorPhoneNumber = $obligorPhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getObligorPhoneNumber()
    {
        return $this->ObligorPhoneNumber;
    }

    /**
     * @param OptionalBillAmounts $optionalAmounts
     *
     * @return BillData
     */
    public function setOptionalAmounts(OptionalBillAmounts $optionalAmounts)
    {
        $this->OptionalAmounts = $optionalAmounts;

        return $this;
    }

    /**
     * @return OptionalBillAmounts
     */
    public function getOptionalAmounts()
    {
        if (null === $this->OptionalAmounts) {
            $this->OptionalAmounts = new OptionalBillAmounts();
        }

        return $this->OptionalAmounts;
    }
}
