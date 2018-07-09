<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP;

class GetDocumentTypesResponse
{

    /**
     * @var GetDocumentTypesResult $GetDocumentTypesResult
     */
    protected $GetDocumentTypesResult = null;

    /**
     * @param GetDocumentTypesResult $GetDocumentTypesResult
     */
    public function __construct($GetDocumentTypesResult = null)
    {
      $this->GetDocumentTypesResult = $GetDocumentTypesResult;
    }

    /**
     * @return GetDocumentTypesResult
     */
    public function getGetDocumentTypesResult()
    {
      return $this->GetDocumentTypesResult;
    }

    /**
     * @param GetDocumentTypesResult $GetDocumentTypesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypesResponse
     */
    public function setGetDocumentTypesResult($GetDocumentTypesResult)
    {
      $this->GetDocumentTypesResult = $GetDocumentTypesResult;
      return $this;
    }

}
