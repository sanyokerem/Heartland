<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class EndOfDayReportRequest extends MerchantRequest
{
    /**
     * Application
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Application
     *
     * @var Application
     */
    protected $Application;

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
     * EndHour
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $EndHour;

    /**
     * EndMinute
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $EndMinute;

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
     * IncludePDFInResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $IncludePDFInResponse;

    /**
     * SortBy
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Sortable
     *
     * @var Sortable
     */
    protected $SortBy;

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
     * StartHour
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $StartHour;

    /**
     * StartMinute
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $StartMinute;

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
     * @param Application $application
     *
     * @return EndOfDayReportRequest
     */
    public function setApplication($application)
    {
        $this->Application = $application;

        return $this;
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->Application;
    }

    /**
     * @param int $endDay
     *
     * @return EndOfDayReportRequest
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
     * @param int $endHour
     *
     * @return EndOfDayReportRequest
     */
    public function setEndHour($endHour)
    {
        $this->EndHour = $endHour;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndHour()
    {
        return $this->EndHour;
    }

    /**
     * @param int $endMinute
     *
     * @return EndOfDayReportRequest
     */
    public function setEndMinute($endMinute)
    {
        $this->EndMinute = $endMinute;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndMinute()
    {
        return $this->EndMinute;
    }

    /**
     * @param int $endMonth
     *
     * @return EndOfDayReportRequest
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
     * @return EndOfDayReportRequest
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
     * @param boolean $includePDFInResponse
     *
     * @return EndOfDayReportRequest
     */
    public function setIncludePDFInResponse($includePDFInResponse)
    {
        $this->IncludePDFInResponse = $includePDFInResponse;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludePDFInResponse()
    {
        return $this->IncludePDFInResponse;
    }

    /**
     * @param Sortable $sortBy
     *
     * @return EndOfDayReportRequest
     */
    public function setSortBy($sortBy)
    {
        $this->SortBy = $sortBy;

        return $this;
    }

    /**
     * @return Sortable
     */
    public function getSortBy()
    {
        return $this->SortBy;
    }

    /**
     * @param int $startDay
     *
     * @return EndOfDayReportRequest
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
     * @param int $startHour
     *
     * @return EndOfDayReportRequest
     */
    public function setStartHour($startHour)
    {
        $this->StartHour = $startHour;

        return $this;
    }

    /**
     * @return int
     */
    public function getStartHour()
    {
        return $this->StartHour;
    }

    /**
     * @param int $startMinute
     *
     * @return EndOfDayReportRequest
     */
    public function setStartMinute($startMinute)
    {
        $this->StartMinute = $startMinute;

        return $this;
    }

    /**
     * @return int
     */
    public function getStartMinute()
    {
        return $this->StartMinute;
    }

    /**
     * @param int $startMonth
     *
     * @return EndOfDayReportRequest
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
     * @return EndOfDayReportRequest
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
     * @return EndOfDayReportRequest
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
