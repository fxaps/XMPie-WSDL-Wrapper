<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Production_SSP;

class UnDeployHTMLDocumentJobResponse
{

    /**
     * @var boolean $UnDeployHTMLDocumentJobResult
     */
    protected $UnDeployHTMLDocumentJobResult = null;

    /**
     * @param boolean $UnDeployHTMLDocumentJobResult
     */
    public function __construct($UnDeployHTMLDocumentJobResult = null)
    {
      $this->UnDeployHTMLDocumentJobResult = $UnDeployHTMLDocumentJobResult;
    }

    /**
     * @return boolean
     */
    public function getUnDeployHTMLDocumentJobResult()
    {
      return $this->UnDeployHTMLDocumentJobResult;
    }

    /**
     * @param boolean $UnDeployHTMLDocumentJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Production_SSP\UnDeployHTMLDocumentJobResponse
     */
    public function setUnDeployHTMLDocumentJobResult($UnDeployHTMLDocumentJobResult)
    {
      $this->UnDeployHTMLDocumentJobResult = $UnDeployHTMLDocumentJobResult;
      return $this;
    }

}
