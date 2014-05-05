<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetTokenRequest extends MerchantRequest
{
    /**
     * ACHAccountType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q8:ACHAccountType
     *
     * @var ACHAccountType
     */
    protected $ACHAccountType;

    /**
     * ACHDepositType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q9:ACHDepositType
     *
     * @var ACHDepositType
     */
    protected $ACHDepositType;

    /**
     * AccountHolderData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q10:CardHolderData
     *
     * @var CardHolderData
     */
    protected $AccountHolderData = null;

    /**
     * AccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $AccountNumber = null;

    /**
     * ExpirationMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ExpirationMonth;

    /**
     * ExpirationYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ExpirationYear;

    /**
     * PaymentMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TokenPaymentMethod
     *
     * @var TokenPaymentMethod
     */
    protected $PaymentMethod;

    /**
     * RoutingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $RoutingNumber = null;

    /**
     * SkipAccountVerify
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $SkipAccountVerify;

    /**
     * @param ACHAccountType $aCHAccountType
     *
     * @return GetTokenRequest
     */
    public function setACHAccountType($aCHAccountType)
    {
        $this->ACHAccountType = $aCHAccountType;

        return $this;
    }

    /**
     * @return ACHAccountType
     */
    public function getACHAccountType()
    {
        return $this->ACHAccountType;
    }

    /**
     * @param ACHDepositType $aCHDepositType
     *
     * @return GetTokenRequest
     */
    public function setACHDepositType($aCHDepositType)
    {
        $this->ACHDepositType = $aCHDepositType;

        return $this;
    }

    /**
     * @return ACHDepositType
     */
    public function getACHDepositType()
    {
        return $this->ACHDepositType;
    }

    /**
     * @param CardHolderData $accountHolderData
     *
     * @return GetTokenRequest
     */
    public function setAccountHolderData(CardHolderData $accountHolderData)
    {
        $this->AccountHolderData = $accountHolderData;

        return $this;
    }

    /**
     * @return CardHolderData
     */
    public function getAccountHolderData()
    {
        if (null === $this->AccountHolderData) {
            $this->AccountHolderData = new CardHolderData();
        }

        return $this->AccountHolderData;
    }

    /**
     * @param string $accountNumber
     *
     * @return GetTokenRequest
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param int $expirationMonth
     *
     * @return GetTokenRequest
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->ExpirationMonth = $expirationMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->ExpirationMonth;
    }

    /**
     * @param int $expirationYear
     *
     * @return GetTokenRequest
     */
    public function setExpirationYear($expirationYear)
    {
        $this->ExpirationYear = $expirationYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->ExpirationYear;
    }

    /**
     * @param TokenPaymentMethod $paymentMethod
     *
     * @return GetTokenRequest
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->PaymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return TokenPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param string $routingNumber
     *
     * @return GetTokenRequest
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->RoutingNumber = $routingNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }

    /**
     * @param boolean $skipAccountVerify
     *
     * @return GetTokenRequest
     */
    public function setSkipAccountVerify($skipAccountVerify)
    {
        $this->SkipAccountVerify = $skipAccountVerify;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipAccountVerify()
    {
        return $this->SkipAccountVerify;
    }
}
