<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Authorization
{
    /**
     * AddToBatchReferenceNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $AddToBatchReferenceNumber = null;

    /**
     * Amount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $Amount;

    /**
     * AuthCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $AuthCode = null;

    /**
     * AuthorizationType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:AuthorizationType
     *
     * @var AuthorizationType
     */
    protected $AuthorizationType;

    /**
     * Gateway
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Gateway
     *
     * @var Gateway
     */
    protected $Gateway;

    /**
     * GatewayBatchID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $GatewayBatchID = null;

    /**
     * GatewayDescription
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $GatewayDescription = null;

    /**
     * MaskedAccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MaskedAccountNumber = null;

    /**
     * MaskedRoutingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MaskedRoutingNumber = null;

    /**
     * PaymentMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:PaymentMethod
     *
     * @var PaymentMethod
     */
    protected $PaymentMethod;

    /**
     * ReferenceAuthorizationID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ReferenceAuthorizationID = null;

    /**
     * ReferenceNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ReferenceNumber = null;

    /**
     * @param string $addToBatchReferenceNumber
     *
     * @return Authorization
     */
    public function setAddToBatchReferenceNumber($addToBatchReferenceNumber)
    {
        $this->AddToBatchReferenceNumber = $addToBatchReferenceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddToBatchReferenceNumber()
    {
        return $this->AddToBatchReferenceNumber;
    }

    /**
     * @param float $amount
     *
     * @return Authorization
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param string $authCode
     *
     * @return Authorization
     */
    public function setAuthCode($authCode)
    {
        $this->AuthCode = $authCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->AuthCode;
    }

    /**
     * @param AuthorizationType $authorizationType
     *
     * @return Authorization
     */
    public function setAuthorizationType($authorizationType)
    {
        $this->AuthorizationType = $authorizationType;

        return $this;
    }

    /**
     * @return AuthorizationType
     */
    public function getAuthorizationType()
    {
        return $this->AuthorizationType;
    }

    /**
     * @param Gateway $gateway
     *
     * @return Authorization
     */
    public function setGateway($gateway)
    {
        $this->Gateway = $gateway;

        return $this;
    }

    /**
     * @return Gateway
     */
    public function getGateway()
    {
        return $this->Gateway;
    }

    /**
     * @param string $gatewayBatchID
     *
     * @return Authorization
     */
    public function setGatewayBatchID($gatewayBatchID)
    {
        $this->GatewayBatchID = $gatewayBatchID;

        return $this;
    }

    /**
     * @return string
     */
    public function getGatewayBatchID()
    {
        return $this->GatewayBatchID;
    }

    /**
     * @param string $gatewayDescription
     *
     * @return Authorization
     */
    public function setGatewayDescription($gatewayDescription)
    {
        $this->GatewayDescription = $gatewayDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getGatewayDescription()
    {
        return $this->GatewayDescription;
    }

    /**
     * @param string $maskedAccountNumber
     *
     * @return Authorization
     */
    public function setMaskedAccountNumber($maskedAccountNumber)
    {
        $this->MaskedAccountNumber = $maskedAccountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaskedAccountNumber()
    {
        return $this->MaskedAccountNumber;
    }

    /**
     * @param string $maskedRoutingNumber
     *
     * @return Authorization
     */
    public function setMaskedRoutingNumber($maskedRoutingNumber)
    {
        $this->MaskedRoutingNumber = $maskedRoutingNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaskedRoutingNumber()
    {
        return $this->MaskedRoutingNumber;
    }

    /**
     * @param PaymentMethod $paymentMethod
     *
     * @return Authorization
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->PaymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param int $referenceAuthorizationID
     *
     * @return Authorization
     */
    public function setReferenceAuthorizationID($referenceAuthorizationID)
    {
        $this->ReferenceAuthorizationID = $referenceAuthorizationID;

        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceAuthorizationID()
    {
        return $this->ReferenceAuthorizationID;
    }

    /**
     * @param string $referenceNumber
     *
     * @return Authorization
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->ReferenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }
}
