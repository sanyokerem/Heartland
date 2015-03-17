<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class TransactionRecordWithAuthorizations extends TransactionRecord
{
    /**
     * Authorizations
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfAuthorizationRecord
     *
     * @var ArrayOfAuthorizationRecord
     */
    protected $Authorizations = null;

    /**
     * @param ArrayOfAuthorizationRecord $authorizations
     *
     * @return TransactionRecordWithAuthorizations
     */
    public function setAuthorizations(ArrayOfAuthorizationRecord $authorizations)
    {
        $this->Authorizations = $authorizations;

        return $this;
    }

    /**
     * @return ArrayOfAuthorizationRecord
     */
    public function getAuthorizations()
    {
        if (null === $this->Authorizations) {
            $this->Authorizations = new ArrayOfAuthorizationRecord();
        }

        return $this->Authorizations;
    }
}
