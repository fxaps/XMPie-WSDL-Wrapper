<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Production_SSP;

class DeployHTMLDocumentJobResponse
{

    /**
     * @var string $DeployHTMLDocumentJobResult
     */
    protected $DeployHTMLDocumentJobResult = null;

    /**
     * @param string $DeployHTMLDocumentJobResult
     */
    public function __construct($DeployHTMLDocumentJobResult = null)
    {
      $this->DeployHTMLDocumentJobResult = $DeployHTMLDocumentJobResult;
    }

    /**
     * @return string
     */
    public function getDeployHTMLDocumentJobResult()
    {
      return $this->DeployHTMLDocumentJobResult;
    }

    /**
     * @param string $DeployHTMLDocumentJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Production_SSP\DeployHTMLDocumentJobResponse
     */
    public function setDeployHTMLDocumentJobResult($DeployHTMLDocumentJobResult)
    {
      $this->DeployHTMLDocumentJobResult = $DeployHTMLDocumentJobResult;
      return $this;
    }

}
