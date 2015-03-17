<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfE3CardToCharge
{
    /**
     * E3CardToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:E3CardToCharge
     *
     * @var array(E3CardToCharge)
     */
    protected $E3CardToCharge = null;

    /**
     * @param array(E3CardToCharge) $e3CardToCharge
     *
     * @return ArrayOfE3CardToCharge
     */
    public function setE3CardToCharge($e3CardToCharge)
    {
        $this->E3CardToCharge = $e3CardToCharge;

        return $this;
    }

    /**
     * @return array(E3CardToCharge)
     */
    public function getE3CardToCharge()
    {
        return $this->E3CardToCharge;
    }
}
