<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class TransactionType
{
    const PAYMENT = 'Payment';
    const REVERSAL = 'Reversal';
    const RETURN = 'Return';
    const DISBURSEMENT = 'Disbursement';
    const DISBURSEMENTREVERSAL = 'DisbursementReversal';
    const DISBURSEMENTRETURN = 'DisbursementReturn';
}
