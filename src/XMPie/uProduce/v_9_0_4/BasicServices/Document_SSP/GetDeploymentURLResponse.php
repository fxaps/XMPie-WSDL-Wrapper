<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetDeploymentURLResponse
{

    /**
     * @var string $GetDeploymentURLResult
     */
    protected $GetDeploymentURLResult = null;

    /**
     * @param string $GetDeploymentURLResult
     */
    public function __construct($GetDeploymentURLResult = null)
    {
      $this->GetDeploymentURLResult = $GetDeploymentURLResult;
    }

    /**
     * @return string
     */
    public function getGetDeploymentURLResult()
    {
      return $this->GetDeploymentURLResult;
    }

    /**
     * @param string $GetDeploymentURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetDeploymentURLResponse
     */
    public function setGetDeploymentURLResult($GetDeploymentURLResult)
    {
      $this->GetDeploymentURLResult = $GetDeploymentURLResult;
      return $this;
    }

}
