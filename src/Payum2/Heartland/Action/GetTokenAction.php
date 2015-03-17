<?php
namespace Payum2\Heartland\Action;

use Payum2\Action\ActionInterface;
use Payum2\ApiAwareInterface;
use Payum2\Bridge\Spl\ArrayObject;
use Payum2\Exception\UnsupportedApiException;
use Payum2\Heartland\Model\PaymentDetails;
use Payum2\Heartland\Soap\Base\GetTokenRequest;
use Payum2\Heartland\Soap\Base\GetTokenResponse;
use Payum2\Heartland\Soap\Base\Response;
use Payum2\Request\CaptureRequest;
use Payum2\Request\UserInputRequiredInteractiveRequest;
use Payum2\Exception\RequestNotSupportedException;

class GetTokenAction extends BaseAction
{
    /**
     * {@inheritdoc}
     */
    public function execute($request)
    {
        /** @var $request CaptureRequest */
        if (false == $this->supports($request)) {
            throw RequestNotSupportedException::createActionNotSupported($this, $request);
        }

        /** @var PaymentDetails $model */
        $model = $request->getModel();

        /** @var GetTokenRequest $soapRequest */
        $soapRequest = $model->getRequest();
        $soapRequest->setCredential($this->api->getMerchantCredentials($model->getMerchantName()));

        /** @var GetTokenResponse $response */
        $response = $this->api->getSoapClient()->GetToken($soapRequest);

        //FIXME add new chain
        if ($response instanceof GetTokenResponse) {
            $model->setResponse($response->getGetTokenResult());
        } else {
            $model->setResponse($response);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports($request)
    {
        return 
            $request instanceof CaptureRequest &&
            $request->getModel()->getRequest() instanceof GetTokenRequest
        ;
    }
}
