<?php
namespace Payum2\Heartland;

use Payum2\Heartland\Soap\Client;
use Payum2\Heartland\Soap\Base\Response;
use Payum2\Heartland\Soap\Base\Message;
use \SoapFault;

class SoapClient extends Client
{
    /**
     * @var bool
     */
    protected $isTrace = false;

    /**
     * @param string $wsdl
     * @param array $options
     */
    public function __construct($wsdl, array $options = array())
    {
//        $options['trace'] = true;
        if (!empty($options['trace'])) {
            $this->isTrace = true;
        }
        return parent::__construct($wsdl, $options);
    }

    /**
     * Debug (trace) info
     *
     * @param string $function_name
     * @param array $arguments
     * @param null $options
     * @param null $input_headers
     * @param null $output_headers
     *
     * @return mixed
     */
    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        $exception = null;
        try {
            $return = parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
        } catch (SoapFault $e) {
            $exception = $e;
        }

        if ($this->isTrace) {
            echo sprintf(
                "Request: \n%s\n\nResponse:\n%s\n---------------------\n",
                $this->__getLastRequest(),
                $this->__getLastResponse()
            );
        }
        if ($exception) {
            $return = new Response();
            $return->setIsSuccessful(false);
            $message = new Message();
            $message->setCode($exception->getCode());
            $message->setLevel($exception->getCode());
            $message->setMessageDescription($exception->getMessage());
            $return->getMessages()->setMessage(array($message));
        }

        return $return;
    }
}
