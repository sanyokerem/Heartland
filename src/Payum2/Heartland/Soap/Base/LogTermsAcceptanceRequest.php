<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class LogTermsAcceptanceRequest extends Request
{
    /**
     * DeviceID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DeviceID = null;

    /**
     * Version
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Version = null;

    /**
     * @param string $deviceID
     *
     * @return LogTermsAcceptanceRequest
     */
    public function setDeviceID($deviceID)
    {
        $this->DeviceID = $deviceID;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceID()
    {
        return $this->DeviceID;
    }

    /**
     * @param string $version
     *
     * @return LogTermsAcceptanceRequest
     */
    public function setVersion($version)
    {
        $this->Version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }
}
