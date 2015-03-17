<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetSecurePayBillData
{
    /**
     * request
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q53:GetSecurePayBillDataRequest
     *
     * @var GetSecurePayBillDataRequest
     */
    protected $request = null;

    /**
     * @param GetSecurePayBillDataRequest $request
     *
     * @return GetSecurePayBillData
     */
    public function setRequest(GetSecurePayBillDataRequest $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return GetSecurePayBillDataRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new GetSecurePayBillDataRequest();
        }

        return $this->request;
    }
}
