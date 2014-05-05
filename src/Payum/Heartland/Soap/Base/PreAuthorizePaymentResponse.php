<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class PreAuthorizePaymentResponse extends Response
{
    /**
     * PreAuthorizationAccount_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $PreAuthorizationAccount_ID;

    /**
     * PreAuthorizations
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfPreAuthorization
     *
     * @var ArrayOfPreAuthorization
     */
    protected $PreAuthorizations = null;

    /**
     * PreAuthorizedTransaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $PreAuthorizedTransaction_ID;

    /**
     * PreAuthorizePaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q60:PreAuthorizePaymentResponse
     *
     * @var PreAuthorizePaymentResponse
     */
    protected $PreAuthorizePaymentResult = null;

    /**
     * @param int $preAuthorizationAccount_ID
     *
     * @return PreAuthorizePaymentResponse
     */
    public function setPreAuthorizationAccount_ID($preAuthorizationAccount_ID)
    {
        $this->PreAuthorizationAccount_ID = $preAuthorizationAccount_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreAuthorizationAccount_ID()
    {
        return $this->PreAuthorizationAccount_ID;
    }

    /**
     * @param ArrayOfPreAuthorization $preAuthorizations
     *
     * @return PreAuthorizePaymentResponse
     */
    public function setPreAuthorizations(ArrayOfPreAuthorization $preAuthorizations)
    {
        $this->PreAuthorizations = $preAuthorizations;

        return $this;
    }

    /**
     * @return ArrayOfPreAuthorization
     */
    public function getPreAuthorizations()
    {
        if (null === $this->PreAuthorizations) {
            $this->PreAuthorizations = new ArrayOfPreAuthorization();
        }

        return $this->PreAuthorizations;
    }

    /**
     * @param int $preAuthorizedTransaction_ID
     *
     * @return PreAuthorizePaymentResponse
     */
    public function setPreAuthorizedTransaction_ID($preAuthorizedTransaction_ID)
    {
        $this->PreAuthorizedTransaction_ID = $preAuthorizedTransaction_ID;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreAuthorizedTransaction_ID()
    {
        return $this->PreAuthorizedTransaction_ID;
    }

    /**
     * @param PreAuthorizePaymentResponse $preAuthorizePaymentResult
     *
     * @return PreAuthorizePaymentResponse
     */
    public function setPreAuthorizePaymentResult(PreAuthorizePaymentResponse $preAuthorizePaymentResult)
    {
        $this->PreAuthorizePaymentResult = $preAuthorizePaymentResult;

        return $this;
    }

    /**
     * @return PreAuthorizePaymentResponse
     */
    public function getPreAuthorizePaymentResult()
    {
        if (null === $this->PreAuthorizePaymentResult) {
            $this->PreAuthorizePaymentResult = new PreAuthorizePaymentResponse();
        }

        return $this->PreAuthorizePaymentResult;
    }
}
