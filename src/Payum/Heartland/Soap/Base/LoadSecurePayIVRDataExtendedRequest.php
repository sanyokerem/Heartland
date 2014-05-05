<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class LoadSecurePayIVRDataExtendedRequest extends MerchantRequest
{
    /**
     * ANI
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ANI = null;

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
     * PayorCity
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorCity = null;

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
     * PayorEmailAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorEmailAddress = null;

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
     * PayorLastName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorLastName = null;

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
     * PayorPhoneNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorPhoneNumber = null;

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
     * PayorState
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorState = null;

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
     * @param string $aNI
     *
     * @return LoadSecurePayIVRDataExtendedRequest
     */
    public function setANI($aNI)
    {
        $this->ANI = $aNI;

        return $this;
    }

    /**
     * @return string
     */
    public function getANI()
    {
        return $this->ANI;
    }

    /**
     * @param string $bINRangesToDeny
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $paymentMethodsToDeny
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorCity
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorCountry
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorEmailAddress
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorFirstName
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorLastName
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorMiddleName
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorPhoneNumber
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorPostalCode
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param string $payorState
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @param int $securePayPaymentType_ID
     *
     * @return LoadSecurePayIVRDataExtendedRequest
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
     * @return LoadSecurePayIVRDataExtendedRequest
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
