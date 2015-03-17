<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfReversalAuthorizationRecord
{
    /**
     * ReversalAuthorizationRecord
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReversalAuthorizationRecord
     *
     * @var array(ReversalAuthorizationRecord)
     */
    protected $ReversalAuthorizationRecord = null;

    /**
     * @param array(ReversalAuthorizationRecord) $reversalAuthorizationRecord
     *
     * @return ArrayOfReversalAuthorizationRecord
     */
    public function setReversalAuthorizationRecord($reversalAuthorizationRecord)
    {
        $this->ReversalAuthorizationRecord = $reversalAuthorizationRecord;

        return $this;
    }

    /**
     * @return array(ReversalAuthorizationRecord)
     */
    public function getReversalAuthorizationRecord()
    {
        return $this->ReversalAuthorizationRecord;
    }
}
