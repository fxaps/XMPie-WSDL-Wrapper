<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetDocumentStorageTypesResponse
{

    /**
     * @var GetDocumentStorageTypesResult $GetDocumentStorageTypesResult
     */
    protected $GetDocumentStorageTypesResult = null;

    /**
     * @param GetDocumentStorageTypesResult $GetDocumentStorageTypesResult
     */
    public function __construct($GetDocumentStorageTypesResult = null)
    {
      $this->GetDocumentStorageTypesResult = $GetDocumentStorageTypesResult;
    }

    /**
     * @return GetDocumentStorageTypesResult
     */
    public function getGetDocumentStorageTypesResult()
    {
      return $this->GetDocumentStorageTypesResult;
    }

    /**
     * @param GetDocumentStorageTypesResult $GetDocumentStorageTypesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetDocumentStorageTypesResponse
     */
    public function setGetDocumentStorageTypesResult($GetDocumentStorageTypesResult)
    {
      $this->GetDocumentStorageTypesResult = $GetDocumentStorageTypesResult;
      return $this;
    }

}
