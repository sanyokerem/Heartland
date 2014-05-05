<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd5
 */
class E3DebitCardWithPINData extends E3CardData
{
    /**
     * KeySerialNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $KeySerialNumber = null;

    /**
     * PINBlock
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PINBlock = null;

    /**
     * @param string $keySerialNumber
     *
     * @return E3DebitCardWithPINData
     */
    public function setKeySerialNumber($keySerialNumber)
    {
        $this->KeySerialNumber = $keySerialNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeySerialNumber()
    {
        return $this->KeySerialNumber;
    }

    /**
     * @param string $pINBlock
     *
     * @return E3DebitCardWithPINData
     */
    public function setPINBlock($pINBlock)
    {
        $this->PINBlock = $pINBlock;

        return $this;
    }

    /**
     * @return string
     */
    public function getPINBlock()
    {
        return $this->PINBlock;
    }
}
