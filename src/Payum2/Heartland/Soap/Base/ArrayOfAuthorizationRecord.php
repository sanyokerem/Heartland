<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfAuthorizationRecord
{
    /**
     * AuthorizationRecord
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:AuthorizationRecord
     *
     * @var array(AuthorizationRecord)
     */
    protected $AuthorizationRecord = null;

    /**
     * @param array(AuthorizationRecord) $authorizationRecord
     *
     * @return ArrayOfAuthorizationRecord
     */
    public function setAuthorizationRecord($authorizationRecord)
    {
        $this->AuthorizationRecord = $authorizationRecord;

        return $this;
    }

    /**
     * @return array(AuthorizationRecord)
     */
    public function getAuthorizationRecord()
    {
        return $this->AuthorizationRecord;
    }
}
