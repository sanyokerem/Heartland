<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class MakeBlindPaymentReturnToken
{
    /**
     * MakePaymentReturnTokenRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q29:MakePaymentRequest
     *
     * @var MakePaymentRequest
     */
    protected $MakePaymentReturnTokenRequest = null;

    /**
     * @param MakePaymentRequest $makePaymentReturnTokenRequest
     *
     * @return MakeBlindPaymentReturnToken
     */
    public function setMakePaymentReturnTokenRequest(MakePaymentRequest $makePaymentReturnTokenRequest)
    {
        $this->MakePaymentReturnTokenRequest = $makePaymentReturnTokenRequest;

        return $this;
    }

    /**
     * @return MakePaymentRequest
     */
    public function getMakePaymentReturnTokenRequest()
    {
        if (null === $this->MakePaymentReturnTokenRequest) {
            $this->MakePaymentReturnTokenRequest = new MakePaymentRequest();
        }

        return $this->MakePaymentReturnTokenRequest;
    }
}
