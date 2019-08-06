<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP;

class RedeployOnDemandJobResponse
{

    /**
     * @var boolean $RedeployOnDemandJobResult
     */
    protected $RedeployOnDemandJobResult = null;

    /**
     * @param boolean $RedeployOnDemandJobResult
     */
    public function __construct($RedeployOnDemandJobResult = null)
    {
      $this->RedeployOnDemandJobResult = $RedeployOnDemandJobResult;
    }

    /**
     * @return boolean
     */
    public function getRedeployOnDemandJobResult()
    {
      return $this->RedeployOnDemandJobResult;
    }

    /**
     * @param boolean $RedeployOnDemandJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\RedeployOnDemandJobResponse
     */
    public function setRedeployOnDemandJobResult($RedeployOnDemandJobResult)
    {
      $this->RedeployOnDemandJobResult = $RedeployOnDemandJobResult;
      return $this;
    }

}
