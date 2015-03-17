<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetReversalTypeRequest extends MerchantRequest
{
    /**
     * Transaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $Transaction_ID;

    /**
     * @param int $transaction_ID
     *
     * @return GetReversalTypeRequest
     */
    public function setTransaction_ID($transaction_ID)
    {
        $this->Transaction_ID = $transaction_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransaction_ID()
    {
        return $this->Transaction_ID;
    }
}
