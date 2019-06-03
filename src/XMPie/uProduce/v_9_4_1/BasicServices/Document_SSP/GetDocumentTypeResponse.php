<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP;

class GetDocumentTypeResponse
{

    /**
     * @var GetDocumentTypeResult $GetDocumentTypeResult
     */
    protected $GetDocumentTypeResult = null;

    /**
     * @param GetDocumentTypeResult $GetDocumentTypeResult
     */
    public function __construct($GetDocumentTypeResult = null)
    {
      $this->GetDocumentTypeResult = $GetDocumentTypeResult;
    }

    /**
     * @return GetDocumentTypeResult
     */
    public function getGetDocumentTypeResult()
    {
      return $this->GetDocumentTypeResult;
    }

    /**
     * @param GetDocumentTypeResult $GetDocumentTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\GetDocumentTypeResponse
     */
    public function setGetDocumentTypeResult($GetDocumentTypeResult)
    {
      $this->GetDocumentTypeResult = $GetDocumentTypeResult;
      return $this;
    }

}
