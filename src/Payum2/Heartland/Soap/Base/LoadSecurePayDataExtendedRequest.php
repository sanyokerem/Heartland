<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class LoadSecurePayDataExtendedRequest extends MerchantRequest
{
    /**
     * BINRangesToDeny
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $BINRangesToDeny = null;

    /**
     * BillData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfSecurePayBill
     *
     * @var ArrayOfSecurePayBill
     */
    protected $BillData = null;

    /**
     * MaxFuturePaymentDays
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $MaxFuturePaymentDays;

    /**
     * PaymentMethodsToDeny
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PaymentMethodsToDeny = null;

    /**
     * PayorAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorAddress = null;

    /**
     * PayorAddressIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorAddressIsEditable;

    /**
     * PayorCity
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorCity = null;

    /**
     * PayorCityIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorCityIsEditable;

    /**
     * PayorCountry
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorCountry = null;

    /**
     * PayorCountryIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorCountryIsEditable;

    /**
     * PayorEmailAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorEmailAddress = null;

    /**
     * PayorEmailAddressIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorEmailAddressIsEditable;

    /**
     * PayorFirstName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorFirstName = null;

    /**
     * PayorFirstNameIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorFirstNameIsEditable;

    /**
     * PayorLastName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorLastName = null;

    /**
     * PayorLastNameIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorLastNameIsEditable;

    /**
     * PayorMiddleName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorMiddleName = null;

    /**
     * PayorMiddleNameIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorMiddleNameIsEditable;

    /**
     * PayorPhoneNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorPhoneNumber = null;

    /**
     * PayorPhoneNumberIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorPhoneNumberIsEditable;

    /**
     * PayorPostalCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorPostalCode = null;

    /**
     * PayorPostalCodeIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorPostalCodeIsEditable;

    /**
     * PayorState
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorState = null;

    /**
     * PayorStateIsEditable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $PayorStateIsEditable;

    /**
     * SecurePayPaymentType_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $SecurePayPaymentType_ID;

    /**
     * SelectedLanguage
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Language
     *
     * @var Language
     */
    protected $SelectedLanguage;

    /**
     * @param string $bINRangesToDeny
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setBINRangesToDeny($bINRangesToDeny)
    {
        $this->BINRangesToDeny = $bINRangesToDeny;

        return $this;
    }

    /**
     * @return string
     */
    public function getBINRangesToDeny()
    {
        return $this->BINRangesToDeny;
    }

    /**
     * @param ArrayOfSecurePayBill $billData
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setBillData(ArrayOfSecurePayBill $billData)
    {
        $this->BillData = $billData;

        return $this;
    }

    /**
     * @return ArrayOfSecurePayBill
     */
    public function getBillData()
    {
        if (null === $this->BillData) {
            $this->BillData = new ArrayOfSecurePayBill();
        }

        return $this->BillData;
    }

    /**
     * @param int $maxFuturePaymentDays
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setMaxFuturePaymentDays($maxFuturePaymentDays)
    {
        $this->MaxFuturePaymentDays = $maxFuturePaymentDays;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxFuturePaymentDays()
    {
        return $this->MaxFuturePaymentDays;
    }

    /**
     * @param string $paymentMethodsToDeny
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPaymentMethodsToDeny($paymentMethodsToDeny)
    {
        $this->PaymentMethodsToDeny = $paymentMethodsToDeny;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodsToDeny()
    {
        return $this->PaymentMethodsToDeny;
    }

    /**
     * @param string $payorAddress
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorAddress($payorAddress)
    {
        $this->PayorAddress = $payorAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorAddress()
    {
        return $this->PayorAddress;
    }

    /**
     * @param boolean $payorAddressIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorAddressIsEditable($payorAddressIsEditable)
    {
        $this->PayorAddressIsEditable = $payorAddressIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorAddressIsEditable()
    {
        return $this->PayorAddressIsEditable;
    }

    /**
     * @param string $payorCity
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorCity($payorCity)
    {
        $this->PayorCity = $payorCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorCity()
    {
        return $this->PayorCity;
    }

    /**
     * @param boolean $payorCityIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorCityIsEditable($payorCityIsEditable)
    {
        $this->PayorCityIsEditable = $payorCityIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorCityIsEditable()
    {
        return $this->PayorCityIsEditable;
    }

    /**
     * @param string $payorCountry
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorCountry($payorCountry)
    {
        $this->PayorCountry = $payorCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorCountry()
    {
        return $this->PayorCountry;
    }

    /**
     * @param boolean $payorCountryIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorCountryIsEditable($payorCountryIsEditable)
    {
        $this->PayorCountryIsEditable = $payorCountryIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorCountryIsEditable()
    {
        return $this->PayorCountryIsEditable;
    }

    /**
     * @param string $payorEmailAddress
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorEmailAddress($payorEmailAddress)
    {
        $this->PayorEmailAddress = $payorEmailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorEmailAddress()
    {
        return $this->PayorEmailAddress;
    }

    /**
     * @param boolean $payorEmailAddressIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorEmailAddressIsEditable($payorEmailAddressIsEditable)
    {
        $this->PayorEmailAddressIsEditable = $payorEmailAddressIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorEmailAddressIsEditable()
    {
        return $this->PayorEmailAddressIsEditable;
    }

    /**
     * @param string $payorFirstName
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorFirstName($payorFirstName)
    {
        $this->PayorFirstName = $payorFirstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorFirstName()
    {
        return $this->PayorFirstName;
    }

    /**
     * @param boolean $payorFirstNameIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorFirstNameIsEditable($payorFirstNameIsEditable)
    {
        $this->PayorFirstNameIsEditable = $payorFirstNameIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorFirstNameIsEditable()
    {
        return $this->PayorFirstNameIsEditable;
    }

    /**
     * @param string $payorLastName
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorLastName($payorLastName)
    {
        $this->PayorLastName = $payorLastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorLastName()
    {
        return $this->PayorLastName;
    }

    /**
     * @param boolean $payorLastNameIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorLastNameIsEditable($payorLastNameIsEditable)
    {
        $this->PayorLastNameIsEditable = $payorLastNameIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorLastNameIsEditable()
    {
        return $this->PayorLastNameIsEditable;
    }

    /**
     * @param string $payorMiddleName
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorMiddleName($payorMiddleName)
    {
        $this->PayorMiddleName = $payorMiddleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorMiddleName()
    {
        return $this->PayorMiddleName;
    }

    /**
     * @param boolean $payorMiddleNameIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorMiddleNameIsEditable($payorMiddleNameIsEditable)
    {
        $this->PayorMiddleNameIsEditable = $payorMiddleNameIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorMiddleNameIsEditable()
    {
        return $this->PayorMiddleNameIsEditable;
    }

    /**
     * @param string $payorPhoneNumber
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorPhoneNumber($payorPhoneNumber)
    {
        $this->PayorPhoneNumber = $payorPhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorPhoneNumber()
    {
        return $this->PayorPhoneNumber;
    }

    /**
     * @param boolean $payorPhoneNumberIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorPhoneNumberIsEditable($payorPhoneNumberIsEditable)
    {
        $this->PayorPhoneNumberIsEditable = $payorPhoneNumberIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorPhoneNumberIsEditable()
    {
        return $this->PayorPhoneNumberIsEditable;
    }

    /**
     * @param string $payorPostalCode
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorPostalCode($payorPostalCode)
    {
        $this->PayorPostalCode = $payorPostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorPostalCode()
    {
        return $this->PayorPostalCode;
    }

    /**
     * @param boolean $payorPostalCodeIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorPostalCodeIsEditable($payorPostalCodeIsEditable)
    {
        $this->PayorPostalCodeIsEditable = $payorPostalCodeIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorPostalCodeIsEditable()
    {
        return $this->PayorPostalCodeIsEditable;
    }

    /**
     * @param string $payorState
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorState($payorState)
    {
        $this->PayorState = $payorState;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorState()
    {
        return $this->PayorState;
    }

    /**
     * @param boolean $payorStateIsEditable
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setPayorStateIsEditable($payorStateIsEditable)
    {
        $this->PayorStateIsEditable = $payorStateIsEditable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayorStateIsEditable()
    {
        return $this->PayorStateIsEditable;
    }

    /**
     * @param int $securePayPaymentType_ID
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setSecurePayPaymentType_ID($securePayPaymentType_ID)
    {
        $this->SecurePayPaymentType_ID = $securePayPaymentType_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getSecurePayPaymentType_ID()
    {
        return $this->SecurePayPaymentType_ID;
    }

    /**
     * @param Language $selectedLanguage
     *
     * @return LoadSecurePayDataExtendedRequest
     */
    public function setSelectedLanguage($selectedLanguage)
    {
        $this->SelectedLanguage = $selectedLanguage;

        return $this;
    }

    /**
     * @return Language
     */
    public function getSelectedLanguage()
    {
        return $this->SelectedLanguage;
    }
}
