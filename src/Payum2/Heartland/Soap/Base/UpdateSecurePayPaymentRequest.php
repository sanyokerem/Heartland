<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class UpdateSecurePayPaymentRequest extends Request
{
    /**
     * FutureDatedTransactionID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $FutureDatedTransactionID;

    /**
     * GUID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $GUID = null;

    /**
     * TransactionID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $TransactionID;

    /**
     * @param int $futureDatedTransactionID
     *
     * @return UpdateSecurePayPaymentRequest
     */
    public function setFutureDatedTransactionID($futureDatedTransactionID)
    {
        $this->FutureDatedTransactionID = $futureDatedTransactionID;

        return $this;
    }

    /**
     * @return int
     */
    public function getFutureDatedTransactionID()
    {
        return $this->FutureDatedTransactionID;
    }

    /**
     * @param string $gUID
     *
     * @return UpdateSecurePayPaymentRequest
     */
    public function setGUID($gUID)
    {
        $this->GUID = $gUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $transactionID
     *
     * @return UpdateSecurePayPaymentRequest
     */
    public function setTransactionID($transactionID)
    {
        $this->TransactionID = $transactionID;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
}
