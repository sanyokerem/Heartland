<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class LoadSecurePayIVRDataResponse extends Response
{
    /**
     * TransferID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $TransferID = null;

    /**
     * @param string $transferID
     *
     * @return LoadSecurePayIVRDataResponse
     */
    public function setTransferID($transferID)
    {
        $this->TransferID = $transferID;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransferID()
    {
        return $this->TransferID;
    }
}
