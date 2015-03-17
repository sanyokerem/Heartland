<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfAuthorization
{
    /**
     * Authorization
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Authorization
     *
     * @var array(Authorization)
     */
    protected $Authorization = null;

    /**
     * @param array(Authorization) $authorization
     *
     * @return ArrayOfAuthorization
     */
    public function setAuthorization($authorization)
    {
        $this->Authorization = $authorization;

        return $this;
    }

    /**
     * @return array(Authorization)
     */
    public function getAuthorization()
    {
        return $this->Authorization;
    }
}
