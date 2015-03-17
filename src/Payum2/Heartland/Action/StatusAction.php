<?php
namespace Payum2\Heartland\Action;

use Payum2\Action\ActionInterface;
use Payum2\Request\StatusRequestInterface;
use Payum2\Bridge\Spl\ArrayObject;
use Payum2\Exception\RequestNotSupportedException;

class StatusAction implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute($request)
    {
        /** @var $request StatusRequestInterface */
        if (false == $this->supports($request)) {
            throw RequestNotSupportedException::createActionNotSupported($this, $request);
        }

        $model = ArrayObject::ensureArrayObject($request->getModel());

        if (null === $model['isSuccessful']) {
            $request->markNew();
            return;
        }
        
        if ($model['isSuccessful']) {
            $request->markSuccess();
        } else {
            $request->markFailed();
        }
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($request)
    {
        return 
            $request instanceof StatusRequestInterface &&
            $request->getModel() instanceof \ArrayAccess
        ;
    }
}
