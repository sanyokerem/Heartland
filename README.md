Heartland Bolletta
==================
[![Build Status](https://travis-ci.org/66Ton99/Heartland.svg?branch=master)](https://travis-ci.org/66Ton99/Heartland)
[![Coverage Status](https://coveralls.io/repos/66Ton99/Heartland/badge.png)](https://coveralls.io/r/66Ton99/Heartland)

Its provide API connection to [www.heartlandpaymentsystems.com](http://www.heartlandpaymentsystems.com/Products-Services/Billing-Solutions)

Install Dependencies
--------------------

``` bash
$> curl http://getcomposer.org/installer | php
$> php composer.phar install # --dev # for dev dependencies
```

To regenerate SOAP classes. Dev dependencies must be installed first.

```
php vendor/besimple/wsdl2php/bin/wsdl2php.php \
    -w"https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?wsdl" \
    -v2 \
    -nPayum2\\Heartland\\Soap\\Base \
    -cClient \
    -osrc \
    --backup \
    --instance_on_getter \
    --access=protected \
    --empty_parameter_name \
    --wsdl2java_style
```
