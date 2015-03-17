<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ReversalTransactionRecordWithReversalAuthorizations extends TransactionRecord
{
    /**
     * ReversalAuthorizations
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfReversalAuthorizationRecord
     *
     * @var ArrayOfReversalAuthorizationRecord
     */
    protected $ReversalAuthorizations = null;

    /**
     * @param ArrayOfReversalAuthorizationRecord $reversalAuthorizations
     *
     * @return ReversalTransactionRecordWithReversalAuthorizations
     */
    public function setReversalAuthorizations(ArrayOfReversalAuthorizationRecord $reversalAuthorizations)
    {
        $this->ReversalAuthorizations = $reversalAuthorizations;

        return $this;
    }

    /**
     * @return ArrayOfReversalAuthorizationRecord
     */
    public function getReversalAuthorizations()
    {
        if (null === $this->ReversalAuthorizations) {
            $this->ReversalAuthorizations = new ArrayOfReversalAuthorizationRecord();
        }

        return $this->ReversalAuthorizations;
    }
}
