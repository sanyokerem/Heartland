<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetSecurePayBillDataResponse extends Response
{
    /**
     * AllowAmexCredit
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowAmexCredit;

    /**
     * AllowAmexDebit
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowAmexDebit;

    /**
     * AllowDiscoverCredit
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowDiscoverCredit;

    /**
     * AllowDiscoverDebit
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowDiscoverDebit;

    /**
     * AllowECheck
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowECheck;

    /**
     * AllowMastercardCredit
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowMastercardCredit;

    /**
     * AllowMastercardDebit
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowMastercardDebit;

    /**
     * AllowVisaCredit
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowVisaCredit;

    /**
     * AllowVisaDebit
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $AllowVisaDebit;

    /**
     * ApplicationID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ApplicationID;

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
     * Password
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Password = null;

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
     * SecurePayPaymentType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:SecurePayPaymentType
     *
     * @var SecurePayPaymentType
     */
    protected $SecurePayPaymentType;

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
     * UserName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $UserName = null;

    /**
     * GetSecurePayBillDataResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q54:GetSecurePayBillDataResponse
     *
     * @var GetSecurePayBillDataResponse
     */
    protected $GetSecurePayBillDataResult = null;

    /**
     * @param boolean $allowAmexCredit
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowAmexCredit($allowAmexCredit)
    {
        $this->AllowAmexCredit = $allowAmexCredit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowAmexCredit()
    {
        return $this->AllowAmexCredit;
    }

    /**
     * @param boolean $allowAmexDebit
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowAmexDebit($allowAmexDebit)
    {
        $this->AllowAmexDebit = $allowAmexDebit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowAmexDebit()
    {
        return $this->AllowAmexDebit;
    }

    /**
     * @param boolean $allowDiscoverCredit
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowDiscoverCredit($allowDiscoverCredit)
    {
        $this->AllowDiscoverCredit = $allowDiscoverCredit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDiscoverCredit()
    {
        return $this->AllowDiscoverCredit;
    }

    /**
     * @param boolean $allowDiscoverDebit
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowDiscoverDebit($allowDiscoverDebit)
    {
        $this->AllowDiscoverDebit = $allowDiscoverDebit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDiscoverDebit()
    {
        return $this->AllowDiscoverDebit;
    }

    /**
     * @param boolean $allowECheck
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowECheck($allowECheck)
    {
        $this->AllowECheck = $allowECheck;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowECheck()
    {
        return $this->AllowECheck;
    }

    /**
     * @param boolean $allowMastercardCredit
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowMastercardCredit($allowMastercardCredit)
    {
        $this->AllowMastercardCredit = $allowMastercardCredit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMastercardCredit()
    {
        return $this->AllowMastercardCredit;
    }

    /**
     * @param boolean $allowMastercardDebit
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowMastercardDebit($allowMastercardDebit)
    {
        $this->AllowMastercardDebit = $allowMastercardDebit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMastercardDebit()
    {
        return $this->AllowMastercardDebit;
    }

    /**
     * @param boolean $allowVisaCredit
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowVisaCredit($allowVisaCredit)
    {
        $this->AllowVisaCredit = $allowVisaCredit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowVisaCredit()
    {
        return $this->AllowVisaCredit;
    }

    /**
     * @param boolean $allowVisaDebit
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setAllowVisaDebit($allowVisaDebit)
    {
        $this->AllowVisaDebit = $allowVisaDebit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowVisaDebit()
    {
        return $this->AllowVisaDebit;
    }

    /**
     * @param int $applicationID
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setApplicationID($applicationID)
    {
        $this->ApplicationID = $applicationID;

        return $this;
    }

    /**
     * @return int
     */
    public function getApplicationID()
    {
        return $this->ApplicationID;
    }

    /**
     * @param string $bINRangesToDeny
     *
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @param string $password
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setPassword($password)
    {
        $this->Password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $payorAddress
     *
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @return GetSecurePayBillDataResponse
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
     * @param SecurePayPaymentType $securePayPaymentType
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setSecurePayPaymentType($securePayPaymentType)
    {
        $this->SecurePayPaymentType = $securePayPaymentType;

        return $this;
    }

    /**
     * @return SecurePayPaymentType
     */
    public function getSecurePayPaymentType()
    {
        return $this->SecurePayPaymentType;
    }

    /**
     * @param Language $selectedLanguage
     *
     * @return GetSecurePayBillDataResponse
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

    /**
     * @param string $userName
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param GetSecurePayBillDataResponse $getSecurePayBillDataResult
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setGetSecurePayBillDataResult(GetSecurePayBillDataResponse $getSecurePayBillDataResult)
    {
        $this->GetSecurePayBillDataResult = $getSecurePayBillDataResult;

        return $this;
    }

    /**
     * @return GetSecurePayBillDataResponse
     */
    public function getGetSecurePayBillDataResult()
    {
        if (null === $this->GetSecurePayBillDataResult) {
            $this->GetSecurePayBillDataResult = new GetSecurePayBillDataResponse();
        }

        return $this->GetSecurePayBillDataResult;
    }
}
