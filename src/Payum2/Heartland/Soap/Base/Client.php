<?php

namespace Payum2\Heartland\Soap\Base;

use \SoapClient as BaseSoapClient;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?wsdl
 */
class Client extends BaseSoapClient
{
    protected $classMap = array(
        'anyType' => 'Payum2\\Heartland\\Soap\\Base\\anyType',
        'char' => 'Payum2\\Heartland\\Soap\\Base\\char',
        'duration' => 'Payum2\\Heartland\\Soap\\Base\\duration',
        'guid' => 'Payum2\\Heartland\\Soap\\Base\\guid',
        'ACHAccountType' => 'Payum2\\Heartland\\Soap\\Base\\ACHAccountType',
        'ACHDepositType' => 'Payum2\\Heartland\\Soap\\Base\\ACHDepositType',
        'ACHCardData' => 'Payum2\\Heartland\\Soap\\Base\\ACHCardData',
        'ACHCardHolderData' => 'Payum2\\Heartland\\Soap\\Base\\ACHCardHolderData',
        'AESCardData' => 'Payum2\\Heartland\\Soap\\Base\\AESCardData',
        'CardHolderData' => 'Payum2\\Heartland\\Soap\\Base\\CardHolderData',
        'ClearTextCardData' => 'Payum2\\Heartland\\Soap\\Base\\ClearTextCardData',
        'E3CardData' => 'Payum2\\Heartland\\Soap\\Base\\E3CardData',
        'E3DebitCardWithPINData' => 'Payum2\\Heartland\\Soap\\Base\\E3DebitCardWithPINData',
        'AddBlindPaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\AddBlindPaymentRequest',
        'AddPaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\AddPaymentRequest',
        'AddTransactionRequest' => 'Payum2\\Heartland\\Soap\\Base\\AddTransactionRequest',
        'MerchantRequest' => 'Payum2\\Heartland\\Soap\\Base\\MerchantRequest',
        'MerchantCredentials' => 'Payum2\\Heartland\\Soap\\Base\\MerchantCredentials',
        'Credentials' => 'Payum2\\Heartland\\Soap\\Base\\Credentials',
        'ArrayOfAuthorization' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfAuthorization',
        'Authorization' => 'Payum2\\Heartland\\Soap\\Base\\Authorization',
        'AuthorizationType' => 'Payum2\\Heartland\\Soap\\Base\\AuthorizationType',
        'Gateway' => 'Payum2\\Heartland\\Soap\\Base\\Gateway',
        'PaymentMethod' => 'Payum2\\Heartland\\Soap\\Base\\PaymentMethod',
        'ArrayOfBillTransaction' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfBillTransaction',
        'BillTransaction' => 'Payum2\\Heartland\\Soap\\Base\\BillTransaction',
        'BillIdentifier' => 'Payum2\\Heartland\\Soap\\Base\\BillIdentifier',
        'Timezone' => 'Payum2\\Heartland\\Soap\\Base\\Timezone',
        'Transaction' => 'Payum2\\Heartland\\Soap\\Base\\Transaction',
        'Response' => 'Payum2\\Heartland\\Soap\\Base\\Response',
        'ArrayOfMessage' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfMessage',
        'Message' => 'Payum2\\Heartland\\Soap\\Base\\Message',
        'MessageLevels' => 'Payum2\\Heartland\\Soap\\Base\\MessageLevels',
        'AddReversalRequest' => 'Payum2\\Heartland\\Soap\\Base\\AddReversalRequest',
        'ReversalCode' => 'Payum2\\Heartland\\Soap\\Base\\ReversalCode',
        'ActivateMachineRequest' => 'Payum2\\Heartland\\Soap\\Base\\ActivateMachineRequest',
        'AuthenticateRequest' => 'Payum2\\Heartland\\Soap\\Base\\AuthenticateRequest',
        'ChangePasswordRequest' => 'Payum2\\Heartland\\Soap\\Base\\ChangePasswordRequest',
        'UserGroupRequest' => 'Payum2\\Heartland\\Soap\\Base\\UserGroupRequest',
        'UserGroupCredentials' => 'Payum2\\Heartland\\Soap\\Base\\UserGroupCredentials',
        'AddBillRequest' => 'Payum2\\Heartland\\Soap\\Base\\AddBillRequest',
        'Bill' => 'Payum2\\Heartland\\Soap\\Base\\Bill',
        'BillData' => 'Payum2\\Heartland\\Soap\\Base\\BillData',
        'BillPresentment' => 'Payum2\\Heartland\\Soap\\Base\\BillPresentment',
        'Address' => 'Payum2\\Heartland\\Soap\\Base\\Address',
        'BillDataElements' => 'Payum2\\Heartland\\Soap\\Base\\BillDataElements',
        'BillDataElement' => 'Payum2\\Heartland\\Soap\\Base\\BillDataElement',
        'OptionalBillAmounts' => 'Payum2\\Heartland\\Soap\\Base\\OptionalBillAmounts',
        'OptionalBillAmount' => 'Payum2\\Heartland\\Soap\\Base\\OptionalBillAmount',
        'UpdateBillRequest' => 'Payum2\\Heartland\\Soap\\Base\\UpdateBillRequest',
        'ActivateBillRequest' => 'Payum2\\Heartland\\Soap\\Base\\ActivateBillRequest',
        'InactivateBillRequest' => 'Payum2\\Heartland\\Soap\\Base\\InactivateBillRequest',
        'UpdateTokenExpirationDateRequest' => 'Payum2\\Heartland\\Soap\\Base\\UpdateTokenExpirationDateRequest',
        'EndOfDayReportRequest' => 'Payum2\\Heartland\\Soap\\Base\\EndOfDayReportRequest',
        'Application' => 'Payum2\\Heartland\\Soap\\Base\\Application',
        'Sortable' => 'Payum2\\Heartland\\Soap\\Base\\Sortable',
        'EndOfDayReportResponse' => 'Payum2\\Heartland\\Soap\\Base\\EndOfDayReportResponse',
        'GetFileResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetFileResponse',
        'ArrayOfEndOfDayReportTotalForCashier' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfEndOfDayReportTotalForCashier',
        'EndOfDayReportTotalForCashier' => 'Payum2\\Heartland\\Soap\\Base\\EndOfDayReportTotalForCashier',
        'EndOfDayReportTotals' => 'Payum2\\Heartland\\Soap\\Base\\EndOfDayReportTotals',
        'EndOfDayReportHeader' => 'Payum2\\Heartland\\Soap\\Base\\EndOfDayReportHeader',
        'ArrayOfTransactionRecord' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfTransactionRecord',
        'TransactionRecord' => 'Payum2\\Heartland\\Soap\\Base\\TransactionRecord',
        'ArrayOfBillTransactionRecord' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfBillTransactionRecord',
        'BillTransactionRecord' => 'Payum2\\Heartland\\Soap\\Base\\BillTransactionRecord',
        'BillTypeLabels' => 'Payum2\\Heartland\\Soap\\Base\\BillTypeLabels',
        'TransactionType' => 'Payum2\\Heartland\\Soap\\Base\\TransactionType',
        'MakePaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\MakePaymentRequest',
        'ArrayOfACHAccountToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfACHAccountToCharge',
        'ACHAccountToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ACHAccountToCharge',
        'CardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\CardToCharge',
        'CardProcessingMethod' => 'Payum2\\Heartland\\Soap\\Base\\CardProcessingMethod',
        'ArrayOfACHCardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfACHCardToCharge',
        'ACHCardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ACHCardToCharge',
        'ArrayOfAESCardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfAESCardToCharge',
        'AESCardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\AESCardToCharge',
        'ArrayOfClearTextCardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfClearTextCardToCharge',
        'ClearTextCardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ClearTextCardToCharge',
        'ArrayOfE3CardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfE3CardToCharge',
        'E3CardToCharge' => 'Payum2\\Heartland\\Soap\\Base\\E3CardToCharge',
        'ArrayOfE3DebitCardWithPINToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfE3DebitCardWithPINToCharge',
        'E3DebitCardWithPINToCharge' => 'Payum2\\Heartland\\Soap\\Base\\E3DebitCardWithPINToCharge',
        'Language' => 'Payum2\\Heartland\\Soap\\Base\\Language',
        'ArrayOfTokenToCharge' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfTokenToCharge',
        'TokenToCharge' => 'Payum2\\Heartland\\Soap\\Base\\TokenToCharge',
        'MakePaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\MakePaymentResponse',
        'MakePaymentReturnTokenResponse' => 'Payum2\\Heartland\\Soap\\Base\\MakePaymentReturnTokenResponse',
        'ReversePaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\ReversePaymentRequest',
        'ReversePaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\ReversePaymentResponse',
        'ReversalTransactionRecordWithReversalAuthorizations' => 'Payum2\\Heartland\\Soap\\Base\\ReversalTransactionRecordWithReversalAuthorizations',
        'ArrayOfReversalAuthorizationRecord' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfReversalAuthorizationRecord',
        'ReversalAuthorizationRecord' => 'Payum2\\Heartland\\Soap\\Base\\ReversalAuthorizationRecord',
        'AuthorizationRecord' => 'Payum2\\Heartland\\Soap\\Base\\AuthorizationRecord',
        'ReversePaymentWithReversalTypeResponse' => 'Payum2\\Heartland\\Soap\\Base\\ReversePaymentWithReversalTypeResponse',
        'GetReceiptRequest' => 'Payum2\\Heartland\\Soap\\Base\\GetReceiptRequest',
        'ReceiptFileType' => 'Payum2\\Heartland\\Soap\\Base\\ReceiptFileType',
        'GetReceiptResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetReceiptResponse',
        'GetReversalTypeRequest' => 'Payum2\\Heartland\\Soap\\Base\\GetReversalTypeRequest',
        'GetReversalTypeResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetReversalTypeResponse',
        'ReversalType' => 'Payum2\\Heartland\\Soap\\Base\\ReversalType',
        'GetConvenienceFeeRequest' => 'Payum2\\Heartland\\Soap\\Base\\GetConvenienceFeeRequest',
        'GetConvenienceFeeResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetConvenienceFeeResponse',
        'GetTokenRequest' => 'Payum2\\Heartland\\Soap\\Base\\GetTokenRequest',
        'TokenPaymentMethod' => 'Payum2\\Heartland\\Soap\\Base\\TokenPaymentMethod',
        'GetTokenResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetTokenResponse',
        'RegisterTokenToAdditionalMerchantRequest' => 'Payum2\\Heartland\\Soap\\Base\\RegisterTokenToAdditionalMerchantRequest',
        'LoadSecurePayBillDataRequest' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayBillDataRequest',
        'Request' => 'Payum2\\Heartland\\Soap\\Base\\Request',
        'ArrayOfSecurePayBill' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfSecurePayBill',
        'SecurePayBill' => 'Payum2\\Heartland\\Soap\\Base\\SecurePayBill',
        'LoadSecurePayBillDataResponse' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayBillDataResponse',
        'LoadSecurePayMerchantBillDataRequest' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayMerchantBillDataRequest',
        'LoadSecurePayDataExtendedRequest' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayDataExtendedRequest',
        'LoadSecurePayIVRDataExtendedRequest' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayIVRDataExtendedRequest',
        'LoadSecurePayIVRDataResponse' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayIVRDataResponse',
        'GetSecurePayBillDataRequest' => 'Payum2\\Heartland\\Soap\\Base\\GetSecurePayBillDataRequest',
        'GetSecurePayBillDataResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetSecurePayBillDataResponse',
        'SecurePayPaymentType' => 'Payum2\\Heartland\\Soap\\Base\\SecurePayPaymentType',
        'UpdateSecurePayPaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\UpdateSecurePayPaymentRequest',
        'SetupFutureDatedPaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\SetupFutureDatedPaymentRequest',
        'SetupFutureDatedPaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\SetupFutureDatedPaymentResponse',
        'PreAuthorizePaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\PreAuthorizePaymentRequest',
        'PreAuthorizeAccountRequest' => 'Payum2\\Heartland\\Soap\\Base\\PreAuthorizeAccountRequest',
        'PreAuthorizePaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\PreAuthorizePaymentResponse',
        'ArrayOfPreAuthorization' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfPreAuthorization',
        'PreAuthorization' => 'Payum2\\Heartland\\Soap\\Base\\PreAuthorization',
        'CapturePreAuthorizedPaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\CapturePreAuthorizedPaymentRequest',
        'AddSignatureRequest' => 'Payum2\\Heartland\\Soap\\Base\\AddSignatureRequest',
        'LogTermsAcceptanceRequest' => 'Payum2\\Heartland\\Soap\\Base\\LogTermsAcceptanceRequest',
        'DisburseFundsRequest' => 'Payum2\\Heartland\\Soap\\Base\\DisburseFundsRequest',
        'DisburseFundsResponse' => 'Payum2\\Heartland\\Soap\\Base\\DisburseFundsResponse',
        'AddAccountToPreAuthorizedPaymentRequest' => 'Payum2\\Heartland\\Soap\\Base\\AddAccountToPreAuthorizedPaymentRequest',
        'AddAccountToPreAuthorizedPaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\AddAccountToPreAuthorizedPaymentResponse',
        'GetACHReturnsByDateRequest' => 'Payum2\\Heartland\\Soap\\Base\\GetACHReturnsByDateRequest',
        'GetACHReturnsByDateResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetACHReturnsByDateResponse',
        'ArrayOfACHReturnRecord' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfACHReturnRecord',
        'ACHReturnRecord' => 'Payum2\\Heartland\\Soap\\Base\\ACHReturnRecord',
        'ACHReturnTotals' => 'Payum2\\Heartland\\Soap\\Base\\ACHReturnTotals',
        'VoidPreAuthorizedTransactionRequest' => 'Payum2\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionRequest',
        'VoidPreAuthorizedTransactionResponse' => 'Payum2\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionResponse',
        'RemovePreAuthorizedAccountRequest' => 'Payum2\\Heartland\\Soap\\Base\\RemovePreAuthorizedAccountRequest',
        'RemovePreAuthorizedAccountResponse' => 'Payum2\\Heartland\\Soap\\Base\\RemovePreAuthorizedAccountResponse',
        'CloseCurrentCardBatchRequest' => 'Payum2\\Heartland\\Soap\\Base\\CloseCurrentCardBatchRequest',
        'CloseCurrentCardBatchResponse' => 'Payum2\\Heartland\\Soap\\Base\\CloseCurrentCardBatchResponse',
        'ArrayOfCloseCurrentCardBatchDetail' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfCloseCurrentCardBatchDetail',
        'CloseCurrentCardBatchDetail' => 'Payum2\\Heartland\\Soap\\Base\\CloseCurrentCardBatchDetail',
        'GetTransactionByOrderIDRequest' => 'Payum2\\Heartland\\Soap\\Base\\GetTransactionByOrderIDRequest',
        'GetTransactionResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetTransactionResponse',
        'TransactionRecordWithAuthorizations' => 'Payum2\\Heartland\\Soap\\Base\\TransactionRecordWithAuthorizations',
        'ArrayOfAuthorizationRecord' => 'Payum2\\Heartland\\Soap\\Base\\ArrayOfAuthorizationRecord',
        'ReversePaymentByOrderIDRequest' => 'Payum2\\Heartland\\Soap\\Base\\ReversePaymentByOrderIDRequest',
        'ReversePaymentByOrderIDResponse' => 'Payum2\\Heartland\\Soap\\Base\\ReversePaymentByOrderIDResponse',
        'VoidPreAuthorizedTransactionByOrderIDRequest' => 'Payum2\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionByOrderIDRequest',
        'AddBlindPayment' => 'Payum2\\Heartland\\Soap\\Base\\AddBlindPayment',
        'AddBlindPaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\AddBlindPaymentResponse',
        'AddPayment' => 'Payum2\\Heartland\\Soap\\Base\\AddPayment',
        'AddPaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\AddPaymentResponse',
        'AddReversal' => 'Payum2\\Heartland\\Soap\\Base\\AddReversal',
        'AddReversalResponse' => 'Payum2\\Heartland\\Soap\\Base\\AddReversalResponse',
        'ActivateMachine' => 'Payum2\\Heartland\\Soap\\Base\\ActivateMachine',
        'ActivateMachineResponse' => 'Payum2\\Heartland\\Soap\\Base\\ActivateMachineResponse',
        'ChangePassword' => 'Payum2\\Heartland\\Soap\\Base\\ChangePassword',
        'ChangePasswordResponse' => 'Payum2\\Heartland\\Soap\\Base\\ChangePasswordResponse',
        'AddBill' => 'Payum2\\Heartland\\Soap\\Base\\AddBill',
        'AddBillResponse' => 'Payum2\\Heartland\\Soap\\Base\\AddBillResponse',
        'UpdateBill' => 'Payum2\\Heartland\\Soap\\Base\\UpdateBill',
        'UpdateBillResponse' => 'Payum2\\Heartland\\Soap\\Base\\UpdateBillResponse',
        'ActivateBill' => 'Payum2\\Heartland\\Soap\\Base\\ActivateBill',
        'ActivateBillResponse' => 'Payum2\\Heartland\\Soap\\Base\\ActivateBillResponse',
        'InactivateBill' => 'Payum2\\Heartland\\Soap\\Base\\InactivateBill',
        'InactivateBillResponse' => 'Payum2\\Heartland\\Soap\\Base\\InactivateBillResponse',
        'UpdateTokenExpirationDate' => 'Payum2\\Heartland\\Soap\\Base\\UpdateTokenExpirationDate',
        'UpdateTokenExpirationDateResponse' => 'Payum2\\Heartland\\Soap\\Base\\UpdateTokenExpirationDateResponse',
        'EndOfDayReport' => 'Payum2\\Heartland\\Soap\\Base\\EndOfDayReport',
        'MakePayment' => 'Payum2\\Heartland\\Soap\\Base\\MakePayment',
        'MakeBlindPayment' => 'Payum2\\Heartland\\Soap\\Base\\MakeBlindPayment',
        'MakeBlindPaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\MakeBlindPaymentResponse',
        'MakePaymentReturnToken' => 'Payum2\\Heartland\\Soap\\Base\\MakePaymentReturnToken',
        'MakeBlindPaymentReturnToken' => 'Payum2\\Heartland\\Soap\\Base\\MakeBlindPaymentReturnToken',
        'MakeBlindPaymentReturnTokenResponse' => 'Payum2\\Heartland\\Soap\\Base\\MakeBlindPaymentReturnTokenResponse',
        'ReversePayment' => 'Payum2\\Heartland\\Soap\\Base\\ReversePayment',
        'ReversePaymentReturnReversalType' => 'Payum2\\Heartland\\Soap\\Base\\ReversePaymentReturnReversalType',
        'ReversePaymentReturnReversalTypeResponse' => 'Payum2\\Heartland\\Soap\\Base\\ReversePaymentReturnReversalTypeResponse',
        'GetReceipt' => 'Payum2\\Heartland\\Soap\\Base\\GetReceipt',
        'GetReversalType' => 'Payum2\\Heartland\\Soap\\Base\\GetReversalType',
        'GetConvenienceFee' => 'Payum2\\Heartland\\Soap\\Base\\GetConvenienceFee',
        'GetToken' => 'Payum2\\Heartland\\Soap\\Base\\GetToken',
        'RegisterTokenToAdditionalMerchant' => 'Payum2\\Heartland\\Soap\\Base\\RegisterTokenToAdditionalMerchant',
        'RegisterTokenToAdditionalMerchantResponse' => 'Payum2\\Heartland\\Soap\\Base\\RegisterTokenToAdditionalMerchantResponse',
        'LoadSecurePayBillData' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayBillData',
        'LoadSecurePayMerchantBillData' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayMerchantBillData',
        'LoadSecurePayMerchantBillDataResponse' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayMerchantBillDataResponse',
        'LoadSecurePayDataExtended' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayDataExtended',
        'LoadSecurePayDataExtendedResponse' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayDataExtendedResponse',
        'LoadSecurePayIVRDataExtended' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayIVRDataExtended',
        'LoadSecurePayIVRDataExtendedResponse' => 'Payum2\\Heartland\\Soap\\Base\\LoadSecurePayIVRDataExtendedResponse',
        'GetSecurePayBillData' => 'Payum2\\Heartland\\Soap\\Base\\GetSecurePayBillData',
        'UpdateSecurePayPayment' => 'Payum2\\Heartland\\Soap\\Base\\UpdateSecurePayPayment',
        'UpdateSecurePayPaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\UpdateSecurePayPaymentResponse',
        'SetupFutureDatedPayment' => 'Payum2\\Heartland\\Soap\\Base\\SetupFutureDatedPayment',
        'PreAuthorizePayment' => 'Payum2\\Heartland\\Soap\\Base\\PreAuthorizePayment',
        'CapturePreAuthorizedPayment' => 'Payum2\\Heartland\\Soap\\Base\\CapturePreAuthorizedPayment',
        'CapturePreAuthorizedPaymentResponse' => 'Payum2\\Heartland\\Soap\\Base\\CapturePreAuthorizedPaymentResponse',
        'AddSignature' => 'Payum2\\Heartland\\Soap\\Base\\AddSignature',
        'AddSignatureResponse' => 'Payum2\\Heartland\\Soap\\Base\\AddSignatureResponse',
        'LogTermsAcceptance' => 'Payum2\\Heartland\\Soap\\Base\\LogTermsAcceptance',
        'LogTermsAcceptanceResponse' => 'Payum2\\Heartland\\Soap\\Base\\LogTermsAcceptanceResponse',
        'DisburseFunds' => 'Payum2\\Heartland\\Soap\\Base\\DisburseFunds',
        'AddAccountToPreAuthorizedPayment' => 'Payum2\\Heartland\\Soap\\Base\\AddAccountToPreAuthorizedPayment',
        'GetACHReturnsByDate' => 'Payum2\\Heartland\\Soap\\Base\\GetACHReturnsByDate',
        'VoidPreAuthorizedTransaction' => 'Payum2\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransaction',
        'RemovePreAuthorizedAccount' => 'Payum2\\Heartland\\Soap\\Base\\RemovePreAuthorizedAccount',
        'CloseCurrentCardBatch' => 'Payum2\\Heartland\\Soap\\Base\\CloseCurrentCardBatch',
        'GetTransactionByOrderID' => 'Payum2\\Heartland\\Soap\\Base\\GetTransactionByOrderID',
        'GetTransactionByOrderIDResponse' => 'Payum2\\Heartland\\Soap\\Base\\GetTransactionByOrderIDResponse',
        'ReversePaymentByOrderID' => 'Payum2\\Heartland\\Soap\\Base\\ReversePaymentByOrderID',
        'VoidPreAuthorizedTransactionByOrderID' => 'Payum2\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionByOrderID',
        'VoidPreAuthorizedTransactionByOrderIDResponse' => 'Payum2\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionByOrderIDResponse',
    );

    /**
     * Constructor.
     *
     * @param string               $wsdl    WSDL file
     * @param array(string=>mixed) $options Options array
     */
    public function __construct($wsdl, array $options = array())
    {
        if (!isset($options['classmap'])) {
            $options['classmap'] = $this->getClassMap();
        }

        return parent::__construct($wsdl, $options);
    }

    public function getClassMap()
    {
        return $this->classMap;
    }

    /**
     * AddBlindPayment
     *
     * @param AddBlindPaymentRequest $AddBlindPaymentRequest
     *
     * @return AddBlindPaymentResponse
     */
    public function AddBlindPayment(AddBlindPaymentRequest $AddBlindPaymentRequest)
    {
        $parameters = new AddBlindPayment();
        $parameters->setAddBlindPaymentRequest($AddBlindPaymentRequest);

        return $this->__soapCall('AddBlindPayment', array('parameters' => $parameters));
    }

    /**
     * AddPayment
     *
     * @param AddPaymentRequest $AddPaymentRequest
     *
     * @return AddPaymentResponse
     */
    public function AddPayment(AddPaymentRequest $AddPaymentRequest)
    {
        $parameters = new AddPayment();
        $parameters->setAddPaymentRequest($AddPaymentRequest);

        return $this->__soapCall('AddPayment', array('parameters' => $parameters));
    }

    /**
     * AddReversal
     *
     * @param AddReversalRequest $AddReversalRequest
     *
     * @return AddReversalResponse
     */
    public function AddReversal(AddReversalRequest $AddReversalRequest)
    {
        $parameters = new AddReversal();
        $parameters->setAddReversalRequest($AddReversalRequest);

        return $this->__soapCall('AddReversal', array('parameters' => $parameters));
    }

    /**
     * ActivateMachine
     *
     * @param ActivateMachineRequest $ActivateMachineRequest
     *
     * @return ActivateMachineResponse
     */
    public function ActivateMachine(ActivateMachineRequest $ActivateMachineRequest)
    {
        $parameters = new ActivateMachine();
        $parameters->setActivateMachineRequest($ActivateMachineRequest);

        return $this->__soapCall('ActivateMachine', array('parameters' => $parameters));
    }

    /**
     * ChangePassword
     *
     * @param ChangePasswordRequest $ChangePasswordRequest
     *
     * @return ChangePasswordResponse
     */
    public function ChangePassword(ChangePasswordRequest $ChangePasswordRequest)
    {
        $parameters = new ChangePassword();
        $parameters->setChangePasswordRequest($ChangePasswordRequest);

        return $this->__soapCall('ChangePassword', array('parameters' => $parameters));
    }

    /**
     * AddBill
     *
     * @param AddBillRequest $AddBillRequest
     *
     * @return AddBillResponse
     */
    public function AddBill(AddBillRequest $AddBillRequest)
    {
        $parameters = new AddBill();
        $parameters->setAddBillRequest($AddBillRequest);

        return $this->__soapCall('AddBill', array('parameters' => $parameters));
    }

    /**
     * UpdateBill
     *
     * @param UpdateBillRequest $UpdateBillRequest
     *
     * @return UpdateBillResponse
     */
    public function UpdateBill(UpdateBillRequest $UpdateBillRequest)
    {
        $parameters = new UpdateBill();
        $parameters->setUpdateBillRequest($UpdateBillRequest);

        return $this->__soapCall('UpdateBill', array('parameters' => $parameters));
    }

    /**
     * ActivateBill
     *
     * @param ActivateBillRequest $ActivateBillRequest
     *
     * @return ActivateBillResponse
     */
    public function ActivateBill(ActivateBillRequest $ActivateBillRequest)
    {
        $parameters = new ActivateBill();
        $parameters->setActivateBillRequest($ActivateBillRequest);

        return $this->__soapCall('ActivateBill', array('parameters' => $parameters));
    }

    /**
     * InactivateBill
     *
     * @param InactivateBillRequest $InactivateBillRequest
     *
     * @return InactivateBillResponse
     */
    public function InactivateBill(InactivateBillRequest $InactivateBillRequest)
    {
        $parameters = new InactivateBill();
        $parameters->setInactivateBillRequest($InactivateBillRequest);

        return $this->__soapCall('InactivateBill', array('parameters' => $parameters));
    }

    /**
     * UpdateTokenExpirationDate
     *
     * @param UpdateTokenExpirationDateRequest $UpdateTokenExpirationDateRequest
     *
     * @return UpdateTokenExpirationDateResponse
     */
    public function UpdateTokenExpirationDate(UpdateTokenExpirationDateRequest $UpdateTokenExpirationDateRequest)
    {
        $parameters = new UpdateTokenExpirationDate();
        $parameters->setUpdateTokenExpirationDateRequest($UpdateTokenExpirationDateRequest);

        return $this->__soapCall('UpdateTokenExpirationDate', array('parameters' => $parameters));
    }

    /**
     * EndOfDayReport
     *
     * @param EndOfDayReportRequest $EndOfDayReportRequest
     *
     * @return EndOfDayReportResponse
     */
    public function EndOfDayReport(EndOfDayReportRequest $EndOfDayReportRequest)
    {
        $parameters = new EndOfDayReport();
        $parameters->setEndOfDayReportRequest($EndOfDayReportRequest);

        return $this->__soapCall('EndOfDayReport', array('parameters' => $parameters));
    }

    /**
     * MakePayment
     *
     * @param MakePaymentRequest $MakeE3PaymentRequest
     *
     * @return MakePaymentResponse
     */
    public function MakePayment(MakePaymentRequest $MakeE3PaymentRequest)
    {
        $parameters = new MakePayment();
        $parameters->setMakeE3PaymentRequest($MakeE3PaymentRequest);

        return $this->__soapCall('MakePayment', array('parameters' => $parameters));
    }

    /**
     * MakeBlindPayment
     *
     * @param MakePaymentRequest $MakeE3PaymentRequest
     *
     * @return MakeBlindPaymentResponse
     */
    public function MakeBlindPayment(MakePaymentRequest $MakeE3PaymentRequest)
    {
        $parameters = new MakeBlindPayment();
        $parameters->setMakeE3PaymentRequest($MakeE3PaymentRequest);

        return $this->__soapCall('MakeBlindPayment', array('parameters' => $parameters));
    }

    /**
     * MakePaymentReturnToken
     *
     * @param MakePaymentRequest $MakePaymentReturnTokenRequest
     *
     * @return MakePaymentReturnTokenResponse
     */
    public function MakePaymentReturnToken(MakePaymentRequest $MakePaymentReturnTokenRequest)
    {
        $parameters = new MakePaymentReturnToken();
        $parameters->setMakePaymentReturnTokenRequest($MakePaymentReturnTokenRequest);

        return $this->__soapCall('MakePaymentReturnToken', array('parameters' => $parameters));
    }

    /**
     * MakeBlindPaymentReturnToken
     *
     * @param MakePaymentRequest $MakePaymentReturnTokenRequest
     *
     * @return MakeBlindPaymentReturnTokenResponse
     */
    public function MakeBlindPaymentReturnToken(MakePaymentRequest $MakePaymentReturnTokenRequest)
    {
        $parameters = new MakeBlindPaymentReturnToken();
        $parameters->setMakePaymentReturnTokenRequest($MakePaymentReturnTokenRequest);

        return $this->__soapCall('MakeBlindPaymentReturnToken', array('parameters' => $parameters));
    }

    /**
     * ReversePayment
     *
     * @param ReversePaymentRequest $ReversePaymentRequest
     *
     * @return ReversePaymentResponse
     */
    public function ReversePayment(ReversePaymentRequest $ReversePaymentRequest)
    {
        $parameters = new ReversePayment();
        $parameters->setReversePaymentRequest($ReversePaymentRequest);

        return $this->__soapCall('ReversePayment', array('parameters' => $parameters));
    }

    /**
     * ReversePaymentReturnReversalType
     *
     * @param ReversePaymentRequest $ReversePaymentRequest
     *
     * @return ReversePaymentReturnReversalTypeResponse
     */
    public function ReversePaymentReturnReversalType(ReversePaymentRequest $ReversePaymentRequest)
    {
        $parameters = new ReversePaymentReturnReversalType();
        $parameters->setReversePaymentRequest($ReversePaymentRequest);

        return $this->__soapCall('ReversePaymentReturnReversalType', array('parameters' => $parameters));
    }

    /**
     * GetReceipt
     *
     * @param GetReceiptRequest $GetReceiptRequest
     *
     * @return GetReceiptResponse
     */
    public function GetReceipt(GetReceiptRequest $GetReceiptRequest)
    {
        $parameters = new GetReceipt();
        $parameters->setGetReceiptRequest($GetReceiptRequest);

        return $this->__soapCall('GetReceipt', array('parameters' => $parameters));
    }

    /**
     * GetReversalType
     *
     * @param GetReversalTypeRequest $GetReversalTypeRequest
     *
     * @return GetReversalTypeResponse
     */
    public function GetReversalType(GetReversalTypeRequest $GetReversalTypeRequest)
    {
        $parameters = new GetReversalType();
        $parameters->setGetReversalTypeRequest($GetReversalTypeRequest);

        return $this->__soapCall('GetReversalType', array('parameters' => $parameters));
    }

    /**
     * GetConvenienceFee
     *
     * @param GetConvenienceFeeRequest $GetConvenienceFeeRequest
     *
     * @return GetConvenienceFeeResponse
     */
    public function GetConvenienceFee(GetConvenienceFeeRequest $GetConvenienceFeeRequest)
    {
        $parameters = new GetConvenienceFee();
        $parameters->setGetConvenienceFeeRequest($GetConvenienceFeeRequest);

        return $this->__soapCall('GetConvenienceFee', array('parameters' => $parameters));
    }

    /**
     * GetToken
     *
     * @param GetTokenRequest $GetTokenRequest
     *
     * @return GetTokenResponse
     */
    public function GetToken(GetTokenRequest $GetTokenRequest)
    {
        $parameters = new GetToken();
        $parameters->setGetTokenRequest($GetTokenRequest);

        return $this->__soapCall('GetToken', array('parameters' => $parameters));
    }

    /**
     * RegisterTokenToAdditionalMerchant
     *
     * @param RegisterTokenToAdditionalMerchantRequest $request
     *
     * @return RegisterTokenToAdditionalMerchantResponse
     */
    public function RegisterTokenToAdditionalMerchant(RegisterTokenToAdditionalMerchantRequest $request)
    {
        $parameters = new RegisterTokenToAdditionalMerchant();
        $parameters->setRequest($request);

        return $this->__soapCall('RegisterTokenToAdditionalMerchant', array('parameters' => $parameters));
    }

    /**
     * LoadSecurePayBillData
     *
     * @param LoadSecurePayBillDataRequest $request
     *
     * @return LoadSecurePayBillDataResponse
     */
    public function LoadSecurePayBillData(LoadSecurePayBillDataRequest $request)
    {
        $parameters = new LoadSecurePayBillData();
        $parameters->setRequest($request);

        return $this->__soapCall('LoadSecurePayBillData', array('parameters' => $parameters));
    }

    /**
     * LoadSecurePayMerchantBillData
     *
     * @param LoadSecurePayMerchantBillDataRequest $request
     *
     * @return LoadSecurePayMerchantBillDataResponse
     */
    public function LoadSecurePayMerchantBillData(LoadSecurePayMerchantBillDataRequest $request)
    {
        $parameters = new LoadSecurePayMerchantBillData();
        $parameters->setRequest($request);

        return $this->__soapCall('LoadSecurePayMerchantBillData', array('parameters' => $parameters));
    }

    /**
     * LoadSecurePayDataExtended
     *
     * @param LoadSecurePayDataExtendedRequest $request
     *
     * @return LoadSecurePayDataExtendedResponse
     */
    public function LoadSecurePayDataExtended(LoadSecurePayDataExtendedRequest $request)
    {
        $parameters = new LoadSecurePayDataExtended();
        $parameters->setRequest($request);

        return $this->__soapCall('LoadSecurePayDataExtended', array('parameters' => $parameters));
    }

    /**
     * LoadSecurePayIVRDataExtended
     *
     * @param LoadSecurePayIVRDataExtendedRequest $request
     *
     * @return LoadSecurePayIVRDataExtendedResponse
     */
    public function LoadSecurePayIVRDataExtended(LoadSecurePayIVRDataExtendedRequest $request)
    {
        $parameters = new LoadSecurePayIVRDataExtended();
        $parameters->setRequest($request);

        return $this->__soapCall('LoadSecurePayIVRDataExtended', array('parameters' => $parameters));
    }

    /**
     * GetSecurePayBillData
     *
     * @param GetSecurePayBillDataRequest $request
     *
     * @return GetSecurePayBillDataResponse
     */
    public function GetSecurePayBillData(GetSecurePayBillDataRequest $request)
    {
        $parameters = new GetSecurePayBillData();
        $parameters->setRequest($request);

        return $this->__soapCall('GetSecurePayBillData', array('parameters' => $parameters));
    }

    /**
     * UpdateSecurePayPayment
     *
     * @param UpdateSecurePayPaymentRequest $request
     *
     * @return UpdateSecurePayPaymentResponse
     */
    public function UpdateSecurePayPayment(UpdateSecurePayPaymentRequest $request)
    {
        $parameters = new UpdateSecurePayPayment();
        $parameters->setRequest($request);

        return $this->__soapCall('UpdateSecurePayPayment', array('parameters' => $parameters));
    }

    /**
     * SetupFutureDatedPayment
     *
     * @param SetupFutureDatedPaymentRequest $SetupFutureDatedPaymentRequest
     *
     * @return SetupFutureDatedPaymentResponse
     */
    public function SetupFutureDatedPayment(SetupFutureDatedPaymentRequest $SetupFutureDatedPaymentRequest)
    {
        $parameters = new SetupFutureDatedPayment();
        $parameters->setSetupFutureDatedPaymentRequest($SetupFutureDatedPaymentRequest);

        return $this->__soapCall('SetupFutureDatedPayment', array('parameters' => $parameters));
    }

    /**
     * PreAuthorizePayment
     *
     * @param PreAuthorizePaymentRequest $PreAuthorizePaymentRequest
     *
     * @return PreAuthorizePaymentResponse
     */
    public function PreAuthorizePayment(PreAuthorizePaymentRequest $PreAuthorizePaymentRequest)
    {
        $parameters = new PreAuthorizePayment();
        $parameters->setPreAuthorizePaymentRequest($PreAuthorizePaymentRequest);

        return $this->__soapCall('PreAuthorizePayment', array('parameters' => $parameters));
    }

    /**
     * CapturePreAuthorizedPayment
     *
     * @param CapturePreAuthorizedPaymentRequest $CapturePreAuthorizedPaymentRequest
     *
     * @return CapturePreAuthorizedPaymentResponse
     */
    public function CapturePreAuthorizedPayment(CapturePreAuthorizedPaymentRequest $CapturePreAuthorizedPaymentRequest)
    {
        $parameters = new CapturePreAuthorizedPayment();
        $parameters->setCapturePreAuthorizedPaymentRequest($CapturePreAuthorizedPaymentRequest);

        return $this->__soapCall('CapturePreAuthorizedPayment', array('parameters' => $parameters));
    }

    /**
     * AddSignature
     *
     * @param AddSignatureRequest $AddSignatureRequest
     *
     * @return AddSignatureResponse
     */
    public function AddSignature(AddSignatureRequest $AddSignatureRequest)
    {
        $parameters = new AddSignature();
        $parameters->setAddSignatureRequest($AddSignatureRequest);

        return $this->__soapCall('AddSignature', array('parameters' => $parameters));
    }

    /**
     * LogTermsAcceptance
     *
     * @param LogTermsAcceptanceRequest $LogTermsAcceptanceRequest
     *
     * @return LogTermsAcceptanceResponse
     */
    public function LogTermsAcceptance(LogTermsAcceptanceRequest $LogTermsAcceptanceRequest)
    {
        $parameters = new LogTermsAcceptance();
        $parameters->setLogTermsAcceptanceRequest($LogTermsAcceptanceRequest);

        return $this->__soapCall('LogTermsAcceptance', array('parameters' => $parameters));
    }

    /**
     * DisburseFunds
     *
     * @param DisburseFundsRequest $DisburseFundsRequest
     *
     * @return DisburseFundsResponse
     */
    public function DisburseFunds(DisburseFundsRequest $DisburseFundsRequest)
    {
        $parameters = new DisburseFunds();
        $parameters->setDisburseFundsRequest($DisburseFundsRequest);

        return $this->__soapCall('DisburseFunds', array('parameters' => $parameters));
    }

    /**
     * AddAccountToPreAuthorizedPayment
     *
     * @param AddAccountToPreAuthorizedPaymentRequest $AddAccountToPreAuthorizedPaymentRequest
     *
     * @return AddAccountToPreAuthorizedPaymentResponse
     */
    public function AddAccountToPreAuthorizedPayment(AddAccountToPreAuthorizedPaymentRequest $AddAccountToPreAuthorizedPaymentRequest)
    {
        $parameters = new AddAccountToPreAuthorizedPayment();
        $parameters->setAddAccountToPreAuthorizedPaymentRequest($AddAccountToPreAuthorizedPaymentRequest);

        return $this->__soapCall('AddAccountToPreAuthorizedPayment', array('parameters' => $parameters));
    }

    /**
     * GetACHReturnsByDate
     *
     * @param GetACHReturnsByDateRequest $GetACHReturnsByDateRequest
     *
     * @return GetACHReturnsByDateResponse
     */
    public function GetACHReturnsByDate(GetACHReturnsByDateRequest $GetACHReturnsByDateRequest)
    {
        $parameters = new GetACHReturnsByDate();
        $parameters->setGetACHReturnsByDateRequest($GetACHReturnsByDateRequest);

        return $this->__soapCall('GetACHReturnsByDate', array('parameters' => $parameters));
    }

    /**
     * VoidPreAuthorizedTransaction
     *
     * @param VoidPreAuthorizedTransactionRequest $VoidPreAuthorizedTransactionRequest
     *
     * @return VoidPreAuthorizedTransactionResponse
     */
    public function VoidPreAuthorizedTransaction(VoidPreAuthorizedTransactionRequest $VoidPreAuthorizedTransactionRequest)
    {
        $parameters = new VoidPreAuthorizedTransaction();
        $parameters->setVoidPreAuthorizedTransactionRequest($VoidPreAuthorizedTransactionRequest);

        return $this->__soapCall('VoidPreAuthorizedTransaction', array('parameters' => $parameters));
    }

    /**
     * RemovePreAuthorizedAccount
     *
     * @param RemovePreAuthorizedAccountRequest $RemovePreAuthorizedAccountRequest
     *
     * @return RemovePreAuthorizedAccountResponse
     */
    public function RemovePreAuthorizedAccount(RemovePreAuthorizedAccountRequest $RemovePreAuthorizedAccountRequest)
    {
        $parameters = new RemovePreAuthorizedAccount();
        $parameters->setRemovePreAuthorizedAccountRequest($RemovePreAuthorizedAccountRequest);

        return $this->__soapCall('RemovePreAuthorizedAccount', array('parameters' => $parameters));
    }

    /**
     * CloseCurrentCardBatch
     *
     * @param CloseCurrentCardBatchRequest $CloseCurrentCardBatchRequest
     *
     * @return CloseCurrentCardBatchResponse
     */
    public function CloseCurrentCardBatch($CloseCurrentCardBatchRequest)
    {
        $parameters = new CloseCurrentCardBatch();
        $parameters->setCloseCurrentCardBatchRequest($CloseCurrentCardBatchRequest);

        return $this->__soapCall('CloseCurrentCardBatch', array('parameters' => $parameters));
    }

    /**
     * GetTransactionByOrderID
     *
     * @param GetTransactionByOrderIDRequest $GetTransactionByOrderIDRequest
     *
     * @return GetTransactionByOrderIDResponse
     */
    public function GetTransactionByOrderID(GetTransactionByOrderIDRequest $GetTransactionByOrderIDRequest)
    {
        $parameters = new GetTransactionByOrderID();
        $parameters->setGetTransactionByOrderIDRequest($GetTransactionByOrderIDRequest);

        return $this->__soapCall('GetTransactionByOrderID', array('parameters' => $parameters));
    }

    /**
     * ReversePaymentByOrderID
     *
     * @param ReversePaymentByOrderIDRequest $ReversePaymentByOrderIDRequest
     *
     * @return ReversePaymentByOrderIDResponse
     */
    public function ReversePaymentByOrderID(ReversePaymentByOrderIDRequest $ReversePaymentByOrderIDRequest)
    {
        $parameters = new ReversePaymentByOrderID();
        $parameters->setReversePaymentByOrderIDRequest($ReversePaymentByOrderIDRequest);

        return $this->__soapCall('ReversePaymentByOrderID', array('parameters' => $parameters));
    }

    /**
     * VoidPreAuthorizedTransactionByOrderID
     *
     * @param VoidPreAuthorizedTransactionByOrderIDRequest $VoidPreAuthorizedTransactionByOrderIDRequest
     *
     * @return VoidPreAuthorizedTransactionByOrderIDResponse
     */
    public function VoidPreAuthorizedTransactionByOrderID(VoidPreAuthorizedTransactionByOrderIDRequest $VoidPreAuthorizedTransactionByOrderIDRequest)
    {
        $parameters = new VoidPreAuthorizedTransactionByOrderID();
        $parameters->setVoidPreAuthorizedTransactionByOrderIDRequest($VoidPreAuthorizedTransactionByOrderIDRequest);

        return $this->__soapCall('VoidPreAuthorizedTransactionByOrderID', array('parameters' => $parameters));
    }
}
