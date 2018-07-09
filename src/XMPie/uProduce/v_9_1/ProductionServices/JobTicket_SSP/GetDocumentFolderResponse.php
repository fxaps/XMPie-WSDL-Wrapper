<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetDocumentFolderResponse
{

    /**
     * @var string $GetDocumentFolderResult
     */
    protected $GetDocumentFolderResult = null;

    /**
     * @param string $GetDocumentFolderResult
     */
    public function __construct($GetDocumentFolderResult = null)
    {
      $this->GetDocumentFolderResult = $GetDocumentFolderResult;
    }

    /**
     * @return string
     */
    public function getGetDocumentFolderResult()
    {
      return $this->GetDocumentFolderResult;
    }

    /**
     * @param string $GetDocumentFolderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetDocumentFolderResponse
     */
    public function setGetDocumentFolderResult($GetDocumentFolderResult)
    {
      $this->GetDocumentFolderResult = $GetDocumentFolderResult;
      return $this;
    }

}
