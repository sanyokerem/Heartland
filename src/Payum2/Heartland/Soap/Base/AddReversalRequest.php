<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AddReversalRequest extends AddTransactionRequest
{
    /**
     * OrderIDOfReversal
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $OrderIDOfReversal = null;

    /**
     * ReversalCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReversalCode
     *
     * @var ReversalCode
     */
    protected $ReversalCode;

    /**
     * @param string $orderIDOfReversal
     *
     * @return AddReversalRequest
     */
    public function setOrderIDOfReversal($orderIDOfReversal)
    {
        $this->OrderIDOfReversal = $orderIDOfReversal;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderIDOfReversal()
    {
        return $this->OrderIDOfReversal;
    }

    /**
     * @param ReversalCode $reversalCode
     *
     * @return AddReversalRequest
     */
    public function setReversalCode($reversalCode)
    {
        $this->ReversalCode = $reversalCode;

        return $this;
    }

    /**
     * @return ReversalCode
     */
    public function getReversalCode()
    {
        return $this->ReversalCode;
    }
}
