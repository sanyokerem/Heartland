<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class BillTypeLabels
{
    /**
     * Identifier1Label
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Identifier1Label = null;

    /**
     * Identifier2Label
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Identifier2Label = null;

    /**
     * Identifier3Label
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Identifier3Label = null;

    /**
     * Identifier4Label
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Identifier4Label = null;

    /**
     * @param string $identifier1Label
     *
     * @return BillTypeLabels
     */
    public function setIdentifier1Label($identifier1Label)
    {
        $this->Identifier1Label = $identifier1Label;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier1Label()
    {
        return $this->Identifier1Label;
    }

    /**
     * @param string $identifier2Label
     *
     * @return BillTypeLabels
     */
    public function setIdentifier2Label($identifier2Label)
    {
        $this->Identifier2Label = $identifier2Label;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier2Label()
    {
        return $this->Identifier2Label;
    }

    /**
     * @param string $identifier3Label
     *
     * @return BillTypeLabels
     */
    public function setIdentifier3Label($identifier3Label)
    {
        $this->Identifier3Label = $identifier3Label;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier3Label()
    {
        return $this->Identifier3Label;
    }

    /**
     * @param string $identifier4Label
     *
     * @return BillTypeLabels
     */
    public function setIdentifier4Label($identifier4Label)
    {
        $this->Identifier4Label = $identifier4Label;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier4Label()
    {
        return $this->Identifier4Label;
    }
}
