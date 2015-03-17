<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfSecurePayBill
{
    /**
     * SecurePayBill
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:SecurePayBill
     *
     * @var array(SecurePayBill)
     */
    protected $SecurePayBill = null;

    /**
     * @param array(SecurePayBill) $securePayBill
     *
     * @return ArrayOfSecurePayBill
     */
    public function setSecurePayBill($securePayBill)
    {
        $this->SecurePayBill = $securePayBill;

        return $this;
    }

    /**
     * @return array(SecurePayBill)
     */
    public function getSecurePayBill()
    {
        return $this->SecurePayBill;
    }
}
