<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class PreAuthorizeAccountRequest extends MerchantRequest
{
    /**
     * ACHAccountToAuthorize
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ACHAccountToCharge
     *
     * @var ACHAccountToCharge
     */
    protected $ACHAccountToAuthorize = null;

    /**
     * AESCreditCardToAuthorize
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:AESCardToCharge
     *
     * @var AESCardToCharge
     */
    protected $AESCreditCardToAuthorize = null;

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
     * ClearTextCreditCardToAuthorize
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ClearTextCardToCharge
     *
     * @var ClearTextCardToCharge
     */
    protected $ClearTextCreditCardToAuthorize = null;

    /**
     * E3CreditCardToAuthorize
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:E3CardToCharge
     *
     * @var E3CardToCharge
     */
    protected $E3CreditCardToAuthorize = null;

    /**
     * EndUserBrowserType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $EndUserBrowserType = null;

    /**
     * EndUserIPAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $EndUserIPAddress = null;

    /**
     * FeeAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $FeeAmount = null;

    /**
     * Language
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Language
     *
     * @var Language
     */
    protected $Language;

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
     * TokenToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TokenToCharge
     *
     * @var TokenToCharge
     */
    protected $TokenToCharge = null;

    /**
     * @param ACHAccountToCharge $aCHAccountToAuthorize
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setACHAccountToAuthorize(ACHAccountToCharge $aCHAccountToAuthorize)
    {
        $this->ACHAccountToAuthorize = $aCHAccountToAuthorize;

        return $this;
    }

    /**
     * @return ACHAccountToCharge
     */
    public function getACHAccountToAuthorize()
    {
        if (null === $this->ACHAccountToAuthorize) {
            $this->ACHAccountToAuthorize = new ACHAccountToCharge();
        }

        return $this->ACHAccountToAuthorize;
    }

    /**
     * @param AESCardToCharge $aESCreditCardToAuthorize
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setAESCreditCardToAuthorize(AESCardToCharge $aESCreditCardToAuthorize)
    {
        $this->AESCreditCardToAuthorize = $aESCreditCardToAuthorize;

        return $this;
    }

    /**
     * @return AESCardToCharge
     */
    public function getAESCreditCardToAuthorize()
    {
        if (null === $this->AESCreditCardToAuthorize) {
            $this->AESCreditCardToAuthorize = new AESCardToCharge();
        }

        return $this->AESCreditCardToAuthorize;
    }

    /**
     * @param float $amount
     *
     * @return PreAuthorizeAccountRequest
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
     * @param ClearTextCardToCharge $clearTextCreditCardToAuthorize
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setClearTextCreditCardToAuthorize(ClearTextCardToCharge $clearTextCreditCardToAuthorize)
    {
        $this->ClearTextCreditCardToAuthorize = $clearTextCreditCardToAuthorize;

        return $this;
    }

    /**
     * @return ClearTextCardToCharge
     */
    public function getClearTextCreditCardToAuthorize()
    {
        if (null === $this->ClearTextCreditCardToAuthorize) {
            $this->ClearTextCreditCardToAuthorize = new ClearTextCardToCharge();
        }

        return $this->ClearTextCreditCardToAuthorize;
    }

    /**
     * @param E3CardToCharge $e3CreditCardToAuthorize
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setE3CreditCardToAuthorize(E3CardToCharge $e3CreditCardToAuthorize)
    {
        $this->E3CreditCardToAuthorize = $e3CreditCardToAuthorize;

        return $this;
    }

    /**
     * @return E3CardToCharge
     */
    public function getE3CreditCardToAuthorize()
    {
        if (null === $this->E3CreditCardToAuthorize) {
            $this->E3CreditCardToAuthorize = new E3CardToCharge();
        }

        return $this->E3CreditCardToAuthorize;
    }

    /**
     * @param string $endUserBrowserType
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setEndUserBrowserType($endUserBrowserType)
    {
        $this->EndUserBrowserType = $endUserBrowserType;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndUserBrowserType()
    {
        return $this->EndUserBrowserType;
    }

    /**
     * @param string $endUserIPAddress
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setEndUserIPAddress($endUserIPAddress)
    {
        $this->EndUserIPAddress = $endUserIPAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndUserIPAddress()
    {
        return $this->EndUserIPAddress;
    }

    /**
     * @param float $feeAmount
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setFeeAmount($feeAmount)
    {
        $this->FeeAmount = $feeAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }

    /**
     * @param Language $language
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $orderID
     *
     * @return PreAuthorizeAccountRequest
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

    /**
     * @param TokenToCharge $tokenToCharge
     *
     * @return PreAuthorizeAccountRequest
     */
    public function setTokenToCharge(TokenToCharge $tokenToCharge)
    {
        $this->TokenToCharge = $tokenToCharge;

        return $this;
    }

    /**
     * @return TokenToCharge
     */
    public function getTokenToCharge()
    {
        if (null === $this->TokenToCharge) {
            $this->TokenToCharge = new TokenToCharge();
        }

        return $this->TokenToCharge;
    }
}
