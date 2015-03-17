<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AddBlindPaymentRequest extends AddPaymentRequest
{
    /**
     * DuplicatesAllowed
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $DuplicatesAllowed;

    /**
     * OrderID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $OrderID = null;

    /**
     * @param boolean $duplicatesAllowed
     *
     * @return AddBlindPaymentRequest
     */
    public function setDuplicatesAllowed($duplicatesAllowed)
    {
        $this->DuplicatesAllowed = $duplicatesAllowed;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDuplicatesAllowed()
    {
        return $this->DuplicatesAllowed;
    }

    /**
     * @param string $orderID
     *
     * @return AddBlindPaymentRequest
     */
    public function setOrderID($orderID)
    {
        $this->OrderID = $orderID;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
}
