<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class OptionalBillAmount
{
    /**
     * IsPayable
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $IsPayable;

    /**
     * Value
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $Value;

    /**
     * @param boolean $isPayable
     *
     * @return OptionalBillAmount
     */
    public function setIsPayable($isPayable)
    {
        $this->IsPayable = $isPayable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPayable()
    {
        return $this->IsPayable;
    }

    /**
     * @param float $value
     *
     * @return OptionalBillAmount
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }
}
