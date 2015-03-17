<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetConvenienceFeeResponse extends Response
{
    /**
     * ConvenienceFee
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $ConvenienceFee;

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
     * GetConvenienceFeeResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q40:GetConvenienceFeeResponse
     *
     * @var GetConvenienceFeeResponse
     */
    protected $GetConvenienceFeeResult = null;

    /**
     * @param float $convenienceFee
     *
     * @return GetConvenienceFeeResponse
     */
    public function setConvenienceFee($convenienceFee)
    {
        $this->ConvenienceFee = $convenienceFee;

        return $this;
    }

    /**
     * @return float
     */
    public function getConvenienceFee()
    {
        return $this->ConvenienceFee;
    }

    /**
     * @param PaymentMethod $paymentMethod
     *
     * @return GetConvenienceFeeResponse
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
     * @param GetConvenienceFeeResponse $getConvenienceFeeResult
     *
     * @return GetConvenienceFeeResponse
     */
    public function setGetConvenienceFeeResult(GetConvenienceFeeResponse $getConvenienceFeeResult)
    {
        $this->GetConvenienceFeeResult = $getConvenienceFeeResult;

        return $this;
    }

    /**
     * @return GetConvenienceFeeResponse
     */
    public function getGetConvenienceFeeResult()
    {
        if (null === $this->GetConvenienceFeeResult) {
            $this->GetConvenienceFeeResult = new GetConvenienceFeeResponse();
        }

        return $this->GetConvenienceFeeResult;
    }
}
