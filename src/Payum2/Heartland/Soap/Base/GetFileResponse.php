<?php

namespace Payum2\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetFileResponse extends Response
{
    /**
     * FileContent
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:base64Binary
     *
     * @var string
     */
    protected $FileContent = null;

    /**
     * FileName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $FileName = null;

    /**
     * @param string $fileContent
     *
     * @return GetFileResponse
     */
    public function setFileContent($fileContent)
    {
        $this->FileContent = $fileContent;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileContent()
    {
        return $this->FileContent;
    }

    /**
     * @param string $fileName
     *
     * @return GetFileResponse
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }
}
