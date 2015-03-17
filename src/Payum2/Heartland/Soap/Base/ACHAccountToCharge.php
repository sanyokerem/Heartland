<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ACHAccountToCharge extends CardToCharge
{
    /**
     * AccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $AccountNumber = null;

    /**
     * AccountType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q1:ACHAccountType
     *
     * @var ACHAccountType
     */
    protected $AccountType;

    /**
     * DepositType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q2:ACHDepositType
     *
     * @var ACHDepositType
     */
    protected $DepositType;

    /**
     * DocumentID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $DocumentID = null;

    /**
     * InternalAccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $InternalAccountNumber = null;

    /**
     * PayorName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $PayorName = null;

    /**
     * RoutingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:long
     *
     * @var int
     */
    protected $RoutingNumber;

    /**
     * SubmitDate
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    protected $SubmitDate = null;

    /**
     * TrackingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:long
     *
     * @var int
     */
    protected $TrackingNumber;

    /**
     * @param string $accountNumber
     *
     * @return ACHAccountToCharge
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param ACHAccountType $accountType
     *
     * @return ACHAccountToCharge
     */
    public function setAccountType($accountType)
    {
        $this->AccountType = $accountType;

        return $this;
    }

    /**
     * @return ACHAccountType
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }

    /**
     * @param ACHDepositType $depositType
     *
     * @return ACHAccountToCharge
     */
    public function setDepositType($depositType)
    {
        $this->DepositType = $depositType;

        return $this;
    }

    /**
     * @return ACHDepositType
     */
    public function getDepositType()
    {
        return $this->DepositType;
    }

    /**
     * @param string $documentID
     *
     * @return ACHAccountToCharge
     */
    public function setDocumentID($documentID)
    {
        $this->DocumentID = $documentID;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentID()
    {
        return $this->DocumentID;
    }

    /**
     * @param string $internalAccountNumber
     *
     * @return ACHAccountToCharge
     */
    public function setInternalAccountNumber($internalAccountNumber)
    {
        $this->InternalAccountNumber = $internalAccountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getInternalAccountNumber()
    {
        return $this->InternalAccountNumber;
    }

    /**
     * @param string $payorName
     *
     * @return ACHAccountToCharge
     */
    public function setPayorName($payorName)
    {
        $this->PayorName = $payorName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayorName()
    {
        return $this->PayorName;
    }

    /**
     * @param int $routingNumber
     *
     * @return ACHAccountToCharge
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->RoutingNumber = $routingNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }

    /**
     * @param string $submitDate
     *
     * @return ACHAccountToCharge
     */
    public function setSubmitDate($submitDate)
    {
        $this->SubmitDate = $submitDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubmitDate()
    {
        return $this->SubmitDate;
    }

    /**
     * @param int $trackingNumber
     *
     * @return ACHAccountToCharge
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
}
