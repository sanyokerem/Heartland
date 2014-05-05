<?php

namespace Payum\Heartland\Soap\Base;

use \SoapClient as BaseSoapClient;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?wsdl
 */
class Client extends BaseSoapClient
{
    protected $classMap = array(
        'anyType' => 'Payum\\Heartland\\Soap\\Base\\anyType',
        'char' => 'Payum\\Heartland\\Soap\\Base\\char',
        'duration' => 'Payum\\Heartland\\Soap\\Base\\duration',
        'guid' => 'Payum\\Heartland\\Soap\\Base\\guid',
        'ACHAccountType' => 'Payum\\Heartland\\Soap\\Base\\ACHAccountType',
        'ACHDepositType' => 'Payum\\Heartland\\Soap\\Base\\ACHDepositType',
        'ACHCardData' => 'Payum\\Heartland\\Soap\\Base\\ACHCardData',
        'ACHCardHolderData' => 'Payum\\Heartland\\Soap\\Base\\ACHCardHolderData',
        'AESCardData' => 'Payum\\Heartland\\Soap\\Base\\AESCardData',
        'CardHolderData' => 'Payum\\Heartland\\Soap\\Base\\CardHolderData',
        'ClearTextCardData' => 'Payum\\Heartland\\Soap\\Base\\ClearTextCardData',
        'E3CardData' => 'Payum\\Heartland\\Soap\\Base\\E3CardData',
        'E3DebitCardWithPINData' => 'Payum\\Heartland\\Soap\\Base\\E3DebitCardWithPINData',
        'AddBlindPaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\AddBlindPaymentRequest',
        'AddPaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\AddPaymentRequest',
        'AddTransactionRequest' => 'Payum\\Heartland\\Soap\\Base\\AddTransactionRequest',
        'MerchantRequest' => 'Payum\\Heartland\\Soap\\Base\\MerchantRequest',
        'MerchantCredentials' => 'Payum\\Heartland\\Soap\\Base\\MerchantCredentials',
        'Credentials' => 'Payum\\Heartland\\Soap\\Base\\Credentials',
        'ArrayOfAuthorization' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfAuthorization',
        'Authorization' => 'Payum\\Heartland\\Soap\\Base\\Authorization',
        'AuthorizationType' => 'Payum\\Heartland\\Soap\\Base\\AuthorizationType',
        'Gateway' => 'Payum\\Heartland\\Soap\\Base\\Gateway',
        'PaymentMethod' => 'Payum\\Heartland\\Soap\\Base\\PaymentMethod',
        'ArrayOfBillTransaction' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfBillTransaction',
        'BillTransaction' => 'Payum\\Heartland\\Soap\\Base\\BillTransaction',
        'BillIdentifier' => 'Payum\\Heartland\\Soap\\Base\\BillIdentifier',
        'Timezone' => 'Payum\\Heartland\\Soap\\Base\\Timezone',
        'Transaction' => 'Payum\\Heartland\\Soap\\Base\\Transaction',
        'Response' => 'Payum\\Heartland\\Soap\\Base\\Response',
        'ArrayOfMessage' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfMessage',
        'Message' => 'Payum\\Heartland\\Soap\\Base\\Message',
        'MessageLevels' => 'Payum\\Heartland\\Soap\\Base\\MessageLevels',
        'AddReversalRequest' => 'Payum\\Heartland\\Soap\\Base\\AddReversalRequest',
        'ReversalCode' => 'Payum\\Heartland\\Soap\\Base\\ReversalCode',
        'ActivateMachineRequest' => 'Payum\\Heartland\\Soap\\Base\\ActivateMachineRequest',
        'AuthenticateRequest' => 'Payum\\Heartland\\Soap\\Base\\AuthenticateRequest',
        'ChangePasswordRequest' => 'Payum\\Heartland\\Soap\\Base\\ChangePasswordRequest',
        'UserGroupRequest' => 'Payum\\Heartland\\Soap\\Base\\UserGroupRequest',
        'UserGroupCredentials' => 'Payum\\Heartland\\Soap\\Base\\UserGroupCredentials',
        'AddBillRequest' => 'Payum\\Heartland\\Soap\\Base\\AddBillRequest',
        'Bill' => 'Payum\\Heartland\\Soap\\Base\\Bill',
        'BillData' => 'Payum\\Heartland\\Soap\\Base\\BillData',
        'BillPresentment' => 'Payum\\Heartland\\Soap\\Base\\BillPresentment',
        'Address' => 'Payum\\Heartland\\Soap\\Base\\Address',
        'BillDataElements' => 'Payum\\Heartland\\Soap\\Base\\BillDataElements',
        'BillDataElement' => 'Payum\\Heartland\\Soap\\Base\\BillDataElement',
        'OptionalBillAmounts' => 'Payum\\Heartland\\Soap\\Base\\OptionalBillAmounts',
        'OptionalBillAmount' => 'Payum\\Heartland\\Soap\\Base\\OptionalBillAmount',
        'UpdateBillRequest' => 'Payum\\Heartland\\Soap\\Base\\UpdateBillRequest',
        'ActivateBillRequest' => 'Payum\\Heartland\\Soap\\Base\\ActivateBillRequest',
        'InactivateBillRequest' => 'Payum\\Heartland\\Soap\\Base\\InactivateBillRequest',
        'UpdateTokenExpirationDateRequest' => 'Payum\\Heartland\\Soap\\Base\\UpdateTokenExpirationDateRequest',
        'EndOfDayReportRequest' => 'Payum\\Heartland\\Soap\\Base\\EndOfDayReportRequest',
        'Application' => 'Payum\\Heartland\\Soap\\Base\\Application',
        'Sortable' => 'Payum\\Heartland\\Soap\\Base\\Sortable',
        'EndOfDayReportResponse' => 'Payum\\Heartland\\Soap\\Base\\EndOfDayReportResponse',
        'GetFileResponse' => 'Payum\\Heartland\\Soap\\Base\\GetFileResponse',
        'ArrayOfEndOfDayReportTotalForCashier' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfEndOfDayReportTotalForCashier',
        'EndOfDayReportTotalForCashier' => 'Payum\\Heartland\\Soap\\Base\\EndOfDayReportTotalForCashier',
        'EndOfDayReportTotals' => 'Payum\\Heartland\\Soap\\Base\\EndOfDayReportTotals',
        'EndOfDayReportHeader' => 'Payum\\Heartland\\Soap\\Base\\EndOfDayReportHeader',
        'ArrayOfTransactionRecord' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfTransactionRecord',
        'TransactionRecord' => 'Payum\\Heartland\\Soap\\Base\\TransactionRecord',
        'ArrayOfBillTransactionRecord' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfBillTransactionRecord',
        'BillTransactionRecord' => 'Payum\\Heartland\\Soap\\Base\\BillTransactionRecord',
        'BillTypeLabels' => 'Payum\\Heartland\\Soap\\Base\\BillTypeLabels',
        'TransactionType' => 'Payum\\Heartland\\Soap\\Base\\TransactionType',
        'MakePaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\MakePaymentRequest',
        'ArrayOfACHAccountToCharge' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfACHAccountToCharge',
        'ACHAccountToCharge' => 'Payum\\Heartland\\Soap\\Base\\ACHAccountToCharge',
        'CardToCharge' => 'Payum\\Heartland\\Soap\\Base\\CardToCharge',
        'CardProcessingMethod' => 'Payum\\Heartland\\Soap\\Base\\CardProcessingMethod',
        'ArrayOfACHCardToCharge' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfACHCardToCharge',
        'ACHCardToCharge' => 'Payum\\Heartland\\Soap\\Base\\ACHCardToCharge',
        'ArrayOfAESCardToCharge' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfAESCardToCharge',
        'AESCardToCharge' => 'Payum\\Heartland\\Soap\\Base\\AESCardToCharge',
        'ArrayOfClearTextCardToCharge' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfClearTextCardToCharge',
        'ClearTextCardToCharge' => 'Payum\\Heartland\\Soap\\Base\\ClearTextCardToCharge',
        'ArrayOfE3CardToCharge' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfE3CardToCharge',
        'E3CardToCharge' => 'Payum\\Heartland\\Soap\\Base\\E3CardToCharge',
        'ArrayOfE3DebitCardWithPINToCharge' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfE3DebitCardWithPINToCharge',
        'E3DebitCardWithPINToCharge' => 'Payum\\Heartland\\Soap\\Base\\E3DebitCardWithPINToCharge',
        'Language' => 'Payum\\Heartland\\Soap\\Base\\Language',
        'ArrayOfTokenToCharge' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfTokenToCharge',
        'TokenToCharge' => 'Payum\\Heartland\\Soap\\Base\\TokenToCharge',
        'MakePaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\MakePaymentResponse',
        'MakePaymentReturnTokenResponse' => 'Payum\\Heartland\\Soap\\Base\\MakePaymentReturnTokenResponse',
        'ReversePaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\ReversePaymentRequest',
        'ReversePaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\ReversePaymentResponse',
        'ReversalTransactionRecordWithReversalAuthorizations' => 'Payum\\Heartland\\Soap\\Base\\ReversalTransactionRecordWithReversalAuthorizations',
        'ArrayOfReversalAuthorizationRecord' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfReversalAuthorizationRecord',
        'ReversalAuthorizationRecord' => 'Payum\\Heartland\\Soap\\Base\\ReversalAuthorizationRecord',
        'AuthorizationRecord' => 'Payum\\Heartland\\Soap\\Base\\AuthorizationRecord',
        'ReversePaymentWithReversalTypeResponse' => 'Payum\\Heartland\\Soap\\Base\\ReversePaymentWithReversalTypeResponse',
        'GetReceiptRequest' => 'Payum\\Heartland\\Soap\\Base\\GetReceiptRequest',
        'ReceiptFileType' => 'Payum\\Heartland\\Soap\\Base\\ReceiptFileType',
        'GetReceiptResponse' => 'Payum\\Heartland\\Soap\\Base\\GetReceiptResponse',
        'GetReversalTypeRequest' => 'Payum\\Heartland\\Soap\\Base\\GetReversalTypeRequest',
        'GetReversalTypeResponse' => 'Payum\\Heartland\\Soap\\Base\\GetReversalTypeResponse',
        'ReversalType' => 'Payum\\Heartland\\Soap\\Base\\ReversalType',
        'GetConvenienceFeeRequest' => 'Payum\\Heartland\\Soap\\Base\\GetConvenienceFeeRequest',
        'GetConvenienceFeeResponse' => 'Payum\\Heartland\\Soap\\Base\\GetConvenienceFeeResponse',
        'GetTokenRequest' => 'Payum\\Heartland\\Soap\\Base\\GetTokenRequest',
        'TokenPaymentMethod' => 'Payum\\Heartland\\Soap\\Base\\TokenPaymentMethod',
        'GetTokenResponse' => 'Payum\\Heartland\\Soap\\Base\\GetTokenResponse',
        'RegisterTokenToAdditionalMerchantRequest' => 'Payum\\Heartland\\Soap\\Base\\RegisterTokenToAdditionalMerchantRequest',
        'LoadSecurePayBillDataRequest' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayBillDataRequest',
        'Request' => 'Payum\\Heartland\\Soap\\Base\\Request',
        'ArrayOfSecurePayBill' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfSecurePayBill',
        'SecurePayBill' => 'Payum\\Heartland\\Soap\\Base\\SecurePayBill',
        'LoadSecurePayBillDataResponse' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayBillDataResponse',
        'LoadSecurePayMerchantBillDataRequest' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayMerchantBillDataRequest',
        'LoadSecurePayDataExtendedRequest' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayDataExtendedRequest',
        'LoadSecurePayIVRDataExtendedRequest' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayIVRDataExtendedRequest',
        'LoadSecurePayIVRDataResponse' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayIVRDataResponse',
        'GetSecurePayBillDataRequest' => 'Payum\\Heartland\\Soap\\Base\\GetSecurePayBillDataRequest',
        'GetSecurePayBillDataResponse' => 'Payum\\Heartland\\Soap\\Base\\GetSecurePayBillDataResponse',
        'SecurePayPaymentType' => 'Payum\\Heartland\\Soap\\Base\\SecurePayPaymentType',
        'UpdateSecurePayPaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\UpdateSecurePayPaymentRequest',
        'SetupFutureDatedPaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\SetupFutureDatedPaymentRequest',
        'SetupFutureDatedPaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\SetupFutureDatedPaymentResponse',
        'PreAuthorizePaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\PreAuthorizePaymentRequest',
        'PreAuthorizeAccountRequest' => 'Payum\\Heartland\\Soap\\Base\\PreAuthorizeAccountRequest',
        'PreAuthorizePaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\PreAuthorizePaymentResponse',
        'ArrayOfPreAuthorization' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfPreAuthorization',
        'PreAuthorization' => 'Payum\\Heartland\\Soap\\Base\\PreAuthorization',
        'CapturePreAuthorizedPaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\CapturePreAuthorizedPaymentRequest',
        'AddSignatureRequest' => 'Payum\\Heartland\\Soap\\Base\\AddSignatureRequest',
        'LogTermsAcceptanceRequest' => 'Payum\\Heartland\\Soap\\Base\\LogTermsAcceptanceRequest',
        'DisburseFundsRequest' => 'Payum\\Heartland\\Soap\\Base\\DisburseFundsRequest',
        'DisburseFundsResponse' => 'Payum\\Heartland\\Soap\\Base\\DisburseFundsResponse',
        'AddAccountToPreAuthorizedPaymentRequest' => 'Payum\\Heartland\\Soap\\Base\\AddAccountToPreAuthorizedPaymentRequest',
        'AddAccountToPreAuthorizedPaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\AddAccountToPreAuthorizedPaymentResponse',
        'GetACHReturnsByDateRequest' => 'Payum\\Heartland\\Soap\\Base\\GetACHReturnsByDateRequest',
        'GetACHReturnsByDateResponse' => 'Payum\\Heartland\\Soap\\Base\\GetACHReturnsByDateResponse',
        'ArrayOfACHReturnRecord' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfACHReturnRecord',
        'ACHReturnRecord' => 'Payum\\Heartland\\Soap\\Base\\ACHReturnRecord',
        'ACHReturnTotals' => 'Payum\\Heartland\\Soap\\Base\\ACHReturnTotals',
        'VoidPreAuthorizedTransactionRequest' => 'Payum\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionRequest',
        'VoidPreAuthorizedTransactionResponse' => 'Payum\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionResponse',
        'RemovePreAuthorizedAccountRequest' => 'Payum\\Heartland\\Soap\\Base\\RemovePreAuthorizedAccountRequest',
        'RemovePreAuthorizedAccountResponse' => 'Payum\\Heartland\\Soap\\Base\\RemovePreAuthorizedAccountResponse',
        'CloseCurrentCardBatchRequest' => 'Payum\\Heartland\\Soap\\Base\\CloseCurrentCardBatchRequest',
        'CloseCurrentCardBatchResponse' => 'Payum\\Heartland\\Soap\\Base\\CloseCurrentCardBatchResponse',
        'ArrayOfCloseCurrentCardBatchDetail' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfCloseCurrentCardBatchDetail',
        'CloseCurrentCardBatchDetail' => 'Payum\\Heartland\\Soap\\Base\\CloseCurrentCardBatchDetail',
        'GetTransactionByOrderIDRequest' => 'Payum\\Heartland\\Soap\\Base\\GetTransactionByOrderIDRequest',
        'GetTransactionResponse' => 'Payum\\Heartland\\Soap\\Base\\GetTransactionResponse',
        'TransactionRecordWithAuthorizations' => 'Payum\\Heartland\\Soap\\Base\\TransactionRecordWithAuthorizations',
        'ArrayOfAuthorizationRecord' => 'Payum\\Heartland\\Soap\\Base\\ArrayOfAuthorizationRecord',
        'ReversePaymentByOrderIDRequest' => 'Payum\\Heartland\\Soap\\Base\\ReversePaymentByOrderIDRequest',
        'ReversePaymentByOrderIDResponse' => 'Payum\\Heartland\\Soap\\Base\\ReversePaymentByOrderIDResponse',
        'VoidPreAuthorizedTransactionByOrderIDRequest' => 'Payum\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionByOrderIDRequest',
        'AddBlindPayment' => 'Payum\\Heartland\\Soap\\Base\\AddBlindPayment',
        'AddBlindPaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\AddBlindPaymentResponse',
        'AddPayment' => 'Payum\\Heartland\\Soap\\Base\\AddPayment',
        'AddPaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\AddPaymentResponse',
        'AddReversal' => 'Payum\\Heartland\\Soap\\Base\\AddReversal',
        'AddReversalResponse' => 'Payum\\Heartland\\Soap\\Base\\AddReversalResponse',
        'ActivateMachine' => 'Payum\\Heartland\\Soap\\Base\\ActivateMachine',
        'ActivateMachineResponse' => 'Payum\\Heartland\\Soap\\Base\\ActivateMachineResponse',
        'ChangePassword' => 'Payum\\Heartland\\Soap\\Base\\ChangePassword',
        'ChangePasswordResponse' => 'Payum\\Heartland\\Soap\\Base\\ChangePasswordResponse',
        'AddBill' => 'Payum\\Heartland\\Soap\\Base\\AddBill',
        'AddBillResponse' => 'Payum\\Heartland\\Soap\\Base\\AddBillResponse',
        'UpdateBill' => 'Payum\\Heartland\\Soap\\Base\\UpdateBill',
        'UpdateBillResponse' => 'Payum\\Heartland\\Soap\\Base\\UpdateBillResponse',
        'ActivateBill' => 'Payum\\Heartland\\Soap\\Base\\ActivateBill',
        'ActivateBillResponse' => 'Payum\\Heartland\\Soap\\Base\\ActivateBillResponse',
        'InactivateBill' => 'Payum\\Heartland\\Soap\\Base\\InactivateBill',
        'InactivateBillResponse' => 'Payum\\Heartland\\Soap\\Base\\InactivateBillResponse',
        'UpdateTokenExpirationDate' => 'Payum\\Heartland\\Soap\\Base\\UpdateTokenExpirationDate',
        'UpdateTokenExpirationDateResponse' => 'Payum\\Heartland\\Soap\\Base\\UpdateTokenExpirationDateResponse',
        'EndOfDayReport' => 'Payum\\Heartland\\Soap\\Base\\EndOfDayReport',
        'MakePayment' => 'Payum\\Heartland\\Soap\\Base\\MakePayment',
        'MakeBlindPayment' => 'Payum\\Heartland\\Soap\\Base\\MakeBlindPayment',
        'MakeBlindPaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\MakeBlindPaymentResponse',
        'MakePaymentReturnToken' => 'Payum\\Heartland\\Soap\\Base\\MakePaymentReturnToken',
        'MakeBlindPaymentReturnToken' => 'Payum\\Heartland\\Soap\\Base\\MakeBlindPaymentReturnToken',
        'MakeBlindPaymentReturnTokenResponse' => 'Payum\\Heartland\\Soap\\Base\\MakeBlindPaymentReturnTokenResponse',
        'ReversePayment' => 'Payum\\Heartland\\Soap\\Base\\ReversePayment',
        'ReversePaymentReturnReversalType' => 'Payum\\Heartland\\Soap\\Base\\ReversePaymentReturnReversalType',
        'ReversePaymentReturnReversalTypeResponse' => 'Payum\\Heartland\\Soap\\Base\\ReversePaymentReturnReversalTypeResponse',
        'GetReceipt' => 'Payum\\Heartland\\Soap\\Base\\GetReceipt',
        'GetReversalType' => 'Payum\\Heartland\\Soap\\Base\\GetReversalType',
        'GetConvenienceFee' => 'Payum\\Heartland\\Soap\\Base\\GetConvenienceFee',
        'GetToken' => 'Payum\\Heartland\\Soap\\Base\\GetToken',
        'RegisterTokenToAdditionalMerchant' => 'Payum\\Heartland\\Soap\\Base\\RegisterTokenToAdditionalMerchant',
        'RegisterTokenToAdditionalMerchantResponse' => 'Payum\\Heartland\\Soap\\Base\\RegisterTokenToAdditionalMerchantResponse',
        'LoadSecurePayBillData' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayBillData',
        'LoadSecurePayMerchantBillData' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayMerchantBillData',
        'LoadSecurePayMerchantBillDataResponse' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayMerchantBillDataResponse',
        'LoadSecurePayDataExtended' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayDataExtended',
        'LoadSecurePayDataExtendedResponse' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayDataExtendedResponse',
        'LoadSecurePayIVRDataExtended' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayIVRDataExtended',
        'LoadSecurePayIVRDataExtendedResponse' => 'Payum\\Heartland\\Soap\\Base\\LoadSecurePayIVRDataExtendedResponse',
        'GetSecurePayBillData' => 'Payum\\Heartland\\Soap\\Base\\GetSecurePayBillData',
        'UpdateSecurePayPayment' => 'Payum\\Heartland\\Soap\\Base\\UpdateSecurePayPayment',
        'UpdateSecurePayPaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\UpdateSecurePayPaymentResponse',
        'SetupFutureDatedPayment' => 'Payum\\Heartland\\Soap\\Base\\SetupFutureDatedPayment',
        'PreAuthorizePayment' => 'Payum\\Heartland\\Soap\\Base\\PreAuthorizePayment',
        'CapturePreAuthorizedPayment' => 'Payum\\Heartland\\Soap\\Base\\CapturePreAuthorizedPayment',
        'CapturePreAuthorizedPaymentResponse' => 'Payum\\Heartland\\Soap\\Base\\CapturePreAuthorizedPaymentResponse',
        'AddSignature' => 'Payum\\Heartland\\Soap\\Base\\AddSignature',
        'AddSignatureResponse' => 'Payum\\Heartland\\Soap\\Base\\AddSignatureResponse',
        'LogTermsAcceptance' => 'Payum\\Heartland\\Soap\\Base\\LogTermsAcceptance',
        'LogTermsAcceptanceResponse' => 'Payum\\Heartland\\Soap\\Base\\LogTermsAcceptanceResponse',
        'DisburseFunds' => 'Payum\\Heartland\\Soap\\Base\\DisburseFunds',
        'AddAccountToPreAuthorizedPayment' => 'Payum\\Heartland\\Soap\\Base\\AddAccountToPreAuthorizedPayment',
        'GetACHReturnsByDate' => 'Payum\\Heartland\\Soap\\Base\\GetACHReturnsByDate',
        'VoidPreAuthorizedTransaction' => 'Payum\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransaction',
        'RemovePreAuthorizedAccount' => 'Payum\\Heartland\\Soap\\Base\\RemovePreAuthorizedAccount',
        'CloseCurrentCardBatch' => 'Payum\\Heartland\\Soap\\Base\\CloseCurrentCardBatch',
        'GetTransactionByOrderID' => 'Payum\\Heartland\\Soap\\Base\\GetTransactionByOrderID',
        'GetTransactionByOrderIDResponse' => 'Payum\\Heartland\\Soap\\Base\\GetTransactionByOrderIDResponse',
        'ReversePaymentByOrderID' => 'Payum\\Heartland\\Soap\\Base\\ReversePaymentByOrderID',
        'VoidPreAuthorizedTransactionByOrderID' => 'Payum\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionByOrderID',
        'VoidPreAuthorizedTransactionByOrderIDResponse' => 'Payum\\Heartland\\Soap\\Base\\VoidPreAuthorizedTransactionByOrderIDResponse',
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
