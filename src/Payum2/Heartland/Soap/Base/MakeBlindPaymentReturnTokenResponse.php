<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class MakeBlindPaymentReturnTokenResponse
{
    /**
     * MakeBlindPaymentReturnTokenResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q30:MakePaymentReturnTokenResponse
     *
     * @var MakePaymentReturnTokenResponse
     */
    protected $MakeBlindPaymentReturnTokenResult = null;

    /**
     * @param MakePaymentReturnTokenResponse $makeBlindPaymentReturnTokenResult
     *
     * @return MakeBlindPaymentReturnTokenResponse
     */
    public function setMakeBlindPaymentReturnTokenResult(MakePaymentReturnTokenResponse $makeBlindPaymentReturnTokenResult)
    {
        $this->MakeBlindPaymentReturnTokenResult = $makeBlindPaymentReturnTokenResult;

        return $this;
    }

    /**
     * @return MakePaymentReturnTokenResponse
     */
    public function getMakeBlindPaymentReturnTokenResult()
    {
        if (null === $this->MakeBlindPaymentReturnTokenResult) {
            $this->MakeBlindPaymentReturnTokenResult = new MakePaymentReturnTokenResponse();
        }

        return $this->MakeBlindPaymentReturnTokenResult;
    }
}
