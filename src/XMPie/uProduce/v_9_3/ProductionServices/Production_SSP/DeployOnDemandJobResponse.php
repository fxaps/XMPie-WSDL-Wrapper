<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Production_SSP;

class DeployOnDemandJobResponse
{

    /**
     * @var string $DeployOnDemandJobResult
     */
    protected $DeployOnDemandJobResult = null;

    /**
     * @param string $DeployOnDemandJobResult
     */
    public function __construct($DeployOnDemandJobResult = null)
    {
      $this->DeployOnDemandJobResult = $DeployOnDemandJobResult;
    }

    /**
     * @return string
     */
    public function getDeployOnDemandJobResult()
    {
      return $this->DeployOnDemandJobResult;
    }

    /**
     * @param string $DeployOnDemandJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Production_SSP\DeployOnDemandJobResponse
     */
    public function setDeployOnDemandJobResult($DeployOnDemandJobResult)
    {
      $this->DeployOnDemandJobResult = $DeployOnDemandJobResult;
      return $this;
    }

}
