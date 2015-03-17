<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class EndOfDayReportHeader
{
    /**
     * EndDateTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    protected $EndDateTime;

    /**
     * MerchantName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MerchantName = null;

    /**
     * StartDateTime
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    protected $StartDateTime;

    /**
     * Title
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Title = null;

    /**
     * @param string $endDateTime
     *
     * @return EndOfDayReportHeader
     */
    public function setEndDateTime($endDateTime)
    {
        $this->EndDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }

    /**
     * @param string $merchantName
     *
     * @return EndOfDayReportHeader
     */
    public function setMerchantName($merchantName)
    {
        $this->MerchantName = $merchantName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
        return $this->MerchantName;
    }

    /**
     * @param string $startDateTime
     *
     * @return EndOfDayReportHeader
     */
    public function setStartDateTime($startDateTime)
    {
        $this->StartDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }

    /**
     * @param string $title
     *
     * @return EndOfDayReportHeader
     */
    public function setTitle($title)
    {
        $this->Title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }
}
