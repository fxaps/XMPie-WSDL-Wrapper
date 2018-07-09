<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP;

class GetDocumentStorageTypeResponse
{

    /**
     * @var GetDocumentStorageTypeResult $GetDocumentStorageTypeResult
     */
    protected $GetDocumentStorageTypeResult = null;

    /**
     * @param GetDocumentStorageTypeResult $GetDocumentStorageTypeResult
     */
    public function __construct($GetDocumentStorageTypeResult = null)
    {
      $this->GetDocumentStorageTypeResult = $GetDocumentStorageTypeResult;
    }

    /**
     * @return GetDocumentStorageTypeResult
     */
    public function getGetDocumentStorageTypeResult()
    {
      return $this->GetDocumentStorageTypeResult;
    }

    /**
     * @param GetDocumentStorageTypeResult $GetDocumentStorageTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypeResponse
     */
    public function setGetDocumentStorageTypeResult($GetDocumentStorageTypeResult)
    {
      $this->GetDocumentStorageTypeResult = $GetDocumentStorageTypeResult;
      return $this;
    }

}
