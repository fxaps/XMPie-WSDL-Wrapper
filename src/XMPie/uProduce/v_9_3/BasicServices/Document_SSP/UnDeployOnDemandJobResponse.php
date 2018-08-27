<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP;

class UnDeployOnDemandJobResponse
{

    /**
     * @var boolean $UnDeployOnDemandJobResult
     */
    protected $UnDeployOnDemandJobResult = null;

    /**
     * @param boolean $UnDeployOnDemandJobResult
     */
    public function __construct($UnDeployOnDemandJobResult = null)
    {
      $this->UnDeployOnDemandJobResult = $UnDeployOnDemandJobResult;
    }

    /**
     * @return boolean
     */
    public function getUnDeployOnDemandJobResult()
    {
      return $this->UnDeployOnDemandJobResult;
    }

    /**
     * @param boolean $UnDeployOnDemandJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP\UnDeployOnDemandJobResponse
     */
    public function setUnDeployOnDemandJobResult($UnDeployOnDemandJobResult)
    {
      $this->UnDeployOnDemandJobResult = $UnDeployOnDemandJobResult;
      return $this;
    }

}
