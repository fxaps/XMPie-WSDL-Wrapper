<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetDocumentTypeResponse
{

    /**
     * @var string $GetDocumentTypeResult
     */
    protected $GetDocumentTypeResult = null;

    /**
     * @param string $GetDocumentTypeResult
     */
    public function __construct($GetDocumentTypeResult = null)
    {
      $this->GetDocumentTypeResult = $GetDocumentTypeResult;
    }

    /**
     * @return string
     */
    public function getGetDocumentTypeResult()
    {
      return $this->GetDocumentTypeResult;
    }

    /**
     * @param string $GetDocumentTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetDocumentTypeResponse
     */
    public function setGetDocumentTypeResult($GetDocumentTypeResult)
    {
      $this->GetDocumentTypeResult = $GetDocumentTypeResult;
      return $this;
    }

}
