<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetDocumentNameResponse
{

    /**
     * @var string $GetDocumentNameResult
     */
    protected $GetDocumentNameResult = null;

    /**
     * @param string $GetDocumentNameResult
     */
    public function __construct($GetDocumentNameResult = null)
    {
      $this->GetDocumentNameResult = $GetDocumentNameResult;
    }

    /**
     * @return string
     */
    public function getGetDocumentNameResult()
    {
      return $this->GetDocumentNameResult;
    }

    /**
     * @param string $GetDocumentNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetDocumentNameResponse
     */
    public function setGetDocumentNameResult($GetDocumentNameResult)
    {
      $this->GetDocumentNameResult = $GetDocumentNameResult;
      return $this;
    }

}
