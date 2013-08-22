<?php

namespace Payum\Heartland\Model;

class PaymentDetails implements \ArrayAccess, \IteratorAggregate
{
    /**
     * @var mixed
     */
    protected $request;

    /**
     * @var mixed
     */
    protected $response;
    /**
     * @var string
     */
    protected $messages;

    /**
     * @var bool
     */
    protected $isSuccessful;

    /**
     * @var double
     */
    protected $amount;

    /**
     * @var int
     */
    protected $transactionId;

    /**
     * Set request
     *
     * @param mixed $request
     * @return PaymentDetails
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request
     *
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set response
     *
     * @param mixed $response
     * @return PaymentDetails
     */
    public function setResponse($response)
    {
        $this->response = $response;
        $this->setIsSuccessful($response->getIsSuccessful());
        // TODO fix it
        $messagesArr = array();
        if ($messages = $response->getMessages()) {
            if ($message = $messages->getMessage()) {
                /** @var \Payum\Heartland\Soap\Base\Message $message */
//                foreach ($messages->getMessage() as $message) {
                    $messagesArr[] = $message->getCode() . ' - ' . $message->getMessageDescription();
//                }
            }
        }

        $this->setMessages(implode(' | ', $messagesArr));

        if (method_exists($response, 'getTransaction_ID')) {
            $this->setTransactionId($response->getTransaction_ID());
        }

        return $this;
    }

    /**
     * Get response
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set messages
     *
     * @param string $messages
     * @return PaymentDetails
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * Get messages
     *
     * @return string
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set isSuccessful
     *
     * @param string $isSuccessful
     * @return PaymentDetails
     */
    public function setIsSuccessful($isSuccessful)
    {
        $this->isSuccessful = $isSuccessful;
        return $this;
    }

    /**
     * Get isSuccessful
     *
     * @return bool
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }

    /**
     * Set Amount
     *
     * @param double $amount
     * @return PaymentDetails
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set transactionId
     *
     * @param int $transactionId
     * @return PaymentDetails
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * Get transactionId
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return
            in_array($offset, $this->getSupportedArrayFields()) &&
            property_exists($this, $offset)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->$offset : null;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        if ($this->offsetExists($offset)) {
            $this->$offset = $value;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            $this->$offset = null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        $array = array();
        foreach ($this->getSupportedArrayFields() as $name) {
            $array[$name] = $this[$name];
        }

        return new \ArrayIterator(array_filter($array));
    }

    /**
     * @return array
     */
    protected function getSupportedArrayFields()
    {
        $rc = new \ReflectionClass(get_class($this));

        $fields = array();
        foreach ($rc->getProperties() as $rp) {
            $fields[] = $rp->getName();
        }

        return $fields;
    }
}
