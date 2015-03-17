<?php
namespace Payum2\Heartland\Action;

use Payum2\Action\ActionInterface;
use Payum2\ApiAwareInterface;
use Payum2\Heartland\Api;
use Payum2\Bridge\Spl\ArrayObject;
use Payum2\Exception\UnsupportedApiException;
use Payum2\Request\CaptureRequest;
use Payum2\Request\UserInputRequiredInteractiveRequest;
use Payum2\Exception\RequestNotSupportedException;

abstract class BaseAction implements ActionInterface, ApiAwareInterface
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * {@inheritdoc}
     */
    public function setApi($api)
    {
        if (false == $api instanceof Api) {
            throw new UnsupportedApiException('Not supported.');
        }

        $this->api = $api;
    }
}
