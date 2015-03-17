<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ReversePaymentWithReversalTypeResponse extends ReversePaymentResponse
{
    /**
     * ReversalType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ReversalType = null;

    /**
     * @param string $reversalType
     *
     * @return ReversePaymentWithReversalTypeResponse
     */
    public function setReversalType($reversalType)
    {
        $this->ReversalType = $reversalType;

        return $this;
    }

    /**
     * @return string
     */
    public function getReversalType()
    {
        return $this->ReversalType;
    }
}
