<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfEndOfDayReportTotalForCashier
{
    /**
     * EndOfDayReportTotalForCashier
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:EndOfDayReportTotalForCashier
     *
     * @var array(EndOfDayReportTotalForCashier)
     */
    protected $EndOfDayReportTotalForCashier = null;

    /**
     * @param array(EndOfDayReportTotalForCashier) $endOfDayReportTotalForCashier
     *
     * @return ArrayOfEndOfDayReportTotalForCashier
     */
    public function setEndOfDayReportTotalForCashier($endOfDayReportTotalForCashier)
    {
        $this->EndOfDayReportTotalForCashier = $endOfDayReportTotalForCashier;

        return $this;
    }

    /**
     * @return array(EndOfDayReportTotalForCashier)
     */
    public function getEndOfDayReportTotalForCashier()
    {
        return $this->EndOfDayReportTotalForCashier;
    }
}
