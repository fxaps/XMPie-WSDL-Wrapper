<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetJobPriorityResponse
{

    /**
     * @var boolean $SetJobPriorityResult
     */
    protected $SetJobPriorityResult = null;

    /**
     * @param boolean $SetJobPriorityResult
     */
    public function __construct($SetJobPriorityResult = null)
    {
      $this->SetJobPriorityResult = $SetJobPriorityResult;
    }

    /**
     * @return boolean
     */
    public function getSetJobPriorityResult()
    {
      return $this->SetJobPriorityResult;
    }

    /**
     * @param boolean $SetJobPriorityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetJobPriorityResponse
     */
    public function setSetJobPriorityResult($SetJobPriorityResult)
    {
      $this->SetJobPriorityResult = $SetJobPriorityResult;
      return $this;
    }

}
