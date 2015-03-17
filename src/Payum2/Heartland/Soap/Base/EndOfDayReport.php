<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class EndOfDayReport
{
    /**
     * EndOfDayReportRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q21:EndOfDayReportRequest
     *
     * @var EndOfDayReportRequest
     */
    protected $EndOfDayReportRequest = null;

    /**
     * @param EndOfDayReportRequest $endOfDayReportRequest
     *
     * @return EndOfDayReport
     */
    public function setEndOfDayReportRequest(EndOfDayReportRequest $endOfDayReportRequest)
    {
        $this->EndOfDayReportRequest = $endOfDayReportRequest;

        return $this;
    }

    /**
     * @return EndOfDayReportRequest
     */
    public function getEndOfDayReportRequest()
    {
        if (null === $this->EndOfDayReportRequest) {
            $this->EndOfDayReportRequest = new EndOfDayReportRequest();
        }

        return $this->EndOfDayReportRequest;
    }
}
