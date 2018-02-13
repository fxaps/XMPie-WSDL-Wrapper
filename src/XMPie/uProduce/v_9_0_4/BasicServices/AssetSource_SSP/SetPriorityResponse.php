<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\AssetSource_SSP;

class SetPriorityResponse
{

    /**
     * @var boolean $SetPriorityResult
     */
    protected $SetPriorityResult = null;

    /**
     * @param boolean $SetPriorityResult
     */
    public function __construct($SetPriorityResult = null)
    {
      $this->SetPriorityResult = $SetPriorityResult;
    }

    /**
     * @return boolean
     */
    public function getSetPriorityResult()
    {
      return $this->SetPriorityResult;
    }

    /**
     * @param boolean $SetPriorityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\AssetSource_SSP\SetPriorityResponse
     */
    public function setSetPriorityResult($SetPriorityResult)
    {
      $this->SetPriorityResult = $SetPriorityResult;
      return $this;
    }

}
