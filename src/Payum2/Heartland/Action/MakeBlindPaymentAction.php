<?php
namespace Payum2\Heartland\Action;

use Payum2\Action\ActionInterface;
use Payum2\ApiAwareInterface;
use Payum2\Bridge\Spl\ArrayObject;
use Payum2\Exception\UnsupportedApiException;
use Payum2\Heartland\Model\PaymentDetails;
use Payum2\Heartland\Soap\Base\MakeBlindPaymentResponse;
use Payum2\Heartland\Soap\Base\MakePaymentRequest;
use Payum2\Request\CaptureRequest;
use Payum2\Request\UserInputRequiredInteractiveRequest;
use Payum2\Exception\RequestNotSupportedException;
use Payum2\Heartland\Soap\Base\Response;

class MakeBlindPaymentAction extends BaseAction
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

        /** @var MakePaymentRequest $soapRequest */
        $soapRequest = $model->getRequest();
        $soapRequest->setCredential($this->api->getMerchantCredentials($model->getMerchantName()));

        /** @var MakeBlindPaymentResponse $response */
        $response = $this->api->getSoapClient()->MakeBlindPayment($soapRequest);

        //FIXME add new chain
        if ($response instanceof MakeBlindPaymentResponse) {
            $model->setResponse($response->getMakeBlindPaymentResult());
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
            $request->getModel()->getRequest() instanceof MakePaymentRequest
        ;
    }
}
