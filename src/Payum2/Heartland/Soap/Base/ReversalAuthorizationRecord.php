<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ReversalAuthorizationRecord extends AuthorizationRecord
{
    /**
     * ReversalAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $ReversalAmount;

    /**
     * ReversalReferenceNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ReversalReferenceNumber = null;

    /**
     * @param float $reversalAmount
     *
     * @return ReversalAuthorizationRecord
     */
    public function setReversalAmount($reversalAmount)
    {
        $this->ReversalAmount = $reversalAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getReversalAmount()
    {
        return $this->ReversalAmount;
    }

    /**
     * @param string $reversalReferenceNumber
     *
     * @return ReversalAuthorizationRecord
     */
    public function setReversalReferenceNumber($reversalReferenceNumber)
    {
        $this->ReversalReferenceNumber = $reversalReferenceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getReversalReferenceNumber()
    {
        return $this->ReversalReferenceNumber;
    }
}
