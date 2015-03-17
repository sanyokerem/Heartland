<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfACHReturnRecord
{
    /**
     * ACHReturnRecord
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ACHReturnRecord
     *
     * @var array(ACHReturnRecord)
     */
    protected $ACHReturnRecord = null;

    /**
     * @param array(ACHReturnRecord) $aCHReturnRecord
     *
     * @return ArrayOfACHReturnRecord
     */
    public function setACHReturnRecord($aCHReturnRecord)
    {
        $this->ACHReturnRecord = $aCHReturnRecord;

        return $this;
    }

    /**
     * @return array(ACHReturnRecord)
     */
    public function getACHReturnRecord()
    {
        return $this->ACHReturnRecord;
    }
}
