<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AddSignatureRequest extends MerchantRequest
{
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
     * SignatureImageInBase64
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $SignatureImageInBase64 = null;

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
     * @param Language $language
     *
     * @return AddSignatureRequest
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
     * @param string $signatureImageInBase64
     *
     * @return AddSignatureRequest
     */
    public function setSignatureImageInBase64($signatureImageInBase64)
    {
        $this->SignatureImageInBase64 = $signatureImageInBase64;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureImageInBase64()
    {
        return $this->SignatureImageInBase64;
    }

    /**
     * @param int $transaction_ID
     *
     * @return AddSignatureRequest
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
