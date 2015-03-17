<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetACHReturnsByDateRequest extends MerchantRequest
{
    /**
     * EndDay
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $EndDay;

    /**
     * EndMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $EndMonth;

    /**
     * EndYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $EndYear;

    /**
     * StartDay
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $StartDay;

    /**
     * StartMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $StartMonth;

    /**
     * StartYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $StartYear;

    /**
     * TimeZone
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Timezone
     *
     * @var Timezone
     */
    protected $TimeZone;

    /**
     * @param int $endDay
     *
     * @return GetACHReturnsByDateRequest
     */
    public function setEndDay($endDay)
    {
        $this->EndDay = $endDay;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndDay()
    {
        return $this->EndDay;
    }

    /**
     * @param int $endMonth
     *
     * @return GetACHReturnsByDateRequest
     */
    public function setEndMonth($endMonth)
    {
        $this->EndMonth = $endMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndMonth()
    {
        return $this->EndMonth;
    }

    /**
     * @param int $endYear
     *
     * @return GetACHReturnsByDateRequest
     */
    public function setEndYear($endYear)
    {
        $this->EndYear = $endYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndYear()
    {
        return $this->EndYear;
    }

    /**
     * @param int $startDay
     *
     * @return GetACHReturnsByDateRequest
     */
    public function setStartDay($startDay)
    {
        $this->StartDay = $startDay;

        return $this;
    }

    /**
     * @return int
     */
    public function getStartDay()
    {
        return $this->StartDay;
    }

    /**
     * @param int $startMonth
     *
     * @return GetACHReturnsByDateRequest
     */
    public function setStartMonth($startMonth)
    {
        $this->StartMonth = $startMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getStartMonth()
    {
        return $this->StartMonth;
    }

    /**
     * @param int $startYear
     *
     * @return GetACHReturnsByDateRequest
     */
    public function setStartYear($startYear)
    {
        $this->StartYear = $startYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getStartYear()
    {
        return $this->StartYear;
    }

    /**
     * @param Timezone $timeZone
     *
     * @return GetACHReturnsByDateRequest
     */
    public function setTimeZone($timeZone)
    {
        $this->TimeZone = $timeZone;

        return $this;
    }

    /**
     * @return Timezone
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }
}
