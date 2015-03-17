<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class BillDataElement
{
    /**
     * IsVisible
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $IsVisible;

    /**
     * Value
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Value = null;

    /**
     * @param boolean $isVisible
     *
     * @return BillDataElement
     */
    public function setIsVisible($isVisible)
    {
        $this->IsVisible = $isVisible;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVisible()
    {
        return $this->IsVisible;
    }

    /**
     * @param string $value
     *
     * @return BillDataElement
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
}
