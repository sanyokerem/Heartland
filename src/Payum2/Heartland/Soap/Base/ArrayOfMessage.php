<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfMessage
{
    /**
     * Message
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Message
     *
     * @var array(Message)
     */
    protected $Message = null;

    /**
     * @param array(Message) $message
     *
     * @return ArrayOfMessage
     */
    public function setMessage($message)
    {
        $this->Message = $message;

        return $this;
    }

    /**
     * @return array(Message)
     */
    public function getMessage()
    {
        return $this->Message;
    }
}
