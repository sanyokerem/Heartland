<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class SetupFutureDatedPaymentResponse extends Response
{
    /**
     * FutureDatedPaymentID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $FutureDatedPaymentID;

    /**
     * SetupFutureDatedPaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q58:SetupFutureDatedPaymentResponse
     *
     * @var SetupFutureDatedPaymentResponse
     */
    protected $SetupFutureDatedPaymentResult = null;

    /**
     * @param int $futureDatedPaymentID
     *
     * @return SetupFutureDatedPaymentResponse
     */
    public function setFutureDatedPaymentID($futureDatedPaymentID)
    {
        $this->FutureDatedPaymentID = $futureDatedPaymentID;

        return $this;
    }

    /**
     * @return int
     */
    public function getFutureDatedPaymentID()
    {
        return $this->FutureDatedPaymentID;
    }

    /**
     * @param SetupFutureDatedPaymentResponse $setupFutureDatedPaymentResult
     *
     * @return SetupFutureDatedPaymentResponse
     */
    public function setSetupFutureDatedPaymentResult(SetupFutureDatedPaymentResponse $setupFutureDatedPaymentResult)
    {
        $this->SetupFutureDatedPaymentResult = $setupFutureDatedPaymentResult;

        return $this;
    }

    /**
     * @return SetupFutureDatedPaymentResponse
     */
    public function getSetupFutureDatedPaymentResult()
    {
        if (null === $this->SetupFutureDatedPaymentResult) {
            $this->SetupFutureDatedPaymentResult = new SetupFutureDatedPaymentResponse();
        }

        return $this->SetupFutureDatedPaymentResult;
    }
}
