<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Address
{
    /**
     * AddressLineOne
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $AddressLineOne = null;

    /**
     * City
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $City = null;

    /**
     * Country
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Country = null;

    /**
     * PostalCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PostalCode = null;

    /**
     * State
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $State = null;

    /**
     * @param string $addressLineOne
     *
     * @return Address
     */
    public function setAddressLineOne($addressLineOne)
    {
        $this->AddressLineOne = $addressLineOne;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLineOne()
    {
        return $this->AddressLineOne;
    }

    /**
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $country
     *
     * @return Address
     */
    public function setCountry($country)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $postalCode
     *
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $state
     *
     * @return Address
     */
    public function setState($state)
    {
        $this->State = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }
}
