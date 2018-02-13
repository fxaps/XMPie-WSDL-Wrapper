<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP;

class GetPriorityResponse
{

    /**
     * @var int $GetPriorityResult
     */
    protected $GetPriorityResult = null;

    /**
     * @param int $GetPriorityResult
     */
    public function __construct($GetPriorityResult = null)
    {
      $this->GetPriorityResult = $GetPriorityResult;
    }

    /**
     * @return int
     */
    public function getGetPriorityResult()
    {
      return $this->GetPriorityResult;
    }

    /**
     * @param int $GetPriorityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetPriorityResponse
     */
    public function setGetPriorityResult($GetPriorityResult)
    {
      $this->GetPriorityResult = $GetPriorityResult;
      return $this;
    }

}
