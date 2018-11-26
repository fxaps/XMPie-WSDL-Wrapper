<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetDocumentResponse
{

    /**
     * @var boolean $SetDocumentResult
     */
    protected $SetDocumentResult = null;

    /**
     * @param boolean $SetDocumentResult
     */
    public function __construct($SetDocumentResult = null)
    {
      $this->SetDocumentResult = $SetDocumentResult;
    }

    /**
     * @return boolean
     */
    public function getSetDocumentResult()
    {
      return $this->SetDocumentResult;
    }

    /**
     * @param boolean $SetDocumentResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetDocumentResponse
     */
    public function setSetDocumentResult($SetDocumentResult)
    {
      $this->SetDocumentResult = $SetDocumentResult;
      return $this;
    }

}
