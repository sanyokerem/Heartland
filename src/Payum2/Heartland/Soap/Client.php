<?php
namespace Payum2\Heartland\Soap;

use Payum2\Heartland\Soap\Base\Client as Base;

class Client extends Base
{
    /**
     * Custom mapping here
     *
     * @return array
     */
    public function getClassMap()
    {
        $map = parent::getClassMap();
//        $map['MakePaymentResponse'] = '\Payum2\Heartland\Soap\MakePaymentResponse'; // Example
        return $map;
    }
} 
