<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class InactivateBillRequest extends MerchantRequest
{
    /**
     * BillIdentifier
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillIdentifier
     *
     * @var BillIdentifier
     */
    protected $BillIdentifier = null;

    /**
     * @param BillIdentifier $billIdentifier
     *
     * @return InactivateBillRequest
     */
    public function setBillIdentifier(BillIdentifier $billIdentifier)
    {
        $this->BillIdentifier = $billIdentifier;

        return $this;
    }

    /**
     * @return BillIdentifier
     */
    public function getBillIdentifier()
    {
        if (null === $this->BillIdentifier) {
            $this->BillIdentifier = new BillIdentifier();
        }

        return $this->BillIdentifier;
    }
}
