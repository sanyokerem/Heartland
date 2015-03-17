<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Response
{
    /**
     * Messages
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfMessage
     *
     * @var ArrayOfMessage
     */
    protected $Messages = null;

    /**
     * isSuccessful
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $isSuccessful;

    /**
     * @param ArrayOfMessage $messages
     *
     * @return Response
     */
    public function setMessages(ArrayOfMessage $messages)
    {
        $this->Messages = $messages;

        return $this;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages()
    {
        if (null === $this->Messages) {
            $this->Messages = new ArrayOfMessage();
        }

        return $this->Messages;
    }

    /**
     * @param boolean $isSuccessful
     *
     * @return Response
     */
    public function setIsSuccessful($isSuccessful)
    {
        $this->isSuccessful = $isSuccessful;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }
}
