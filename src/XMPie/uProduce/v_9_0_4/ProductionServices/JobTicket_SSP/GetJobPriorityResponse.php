<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetJobPriorityResponse
{

    /**
     * @var int $GetJobPriorityResult
     */
    protected $GetJobPriorityResult = null;

    /**
     * @param int $GetJobPriorityResult
     */
    public function __construct($GetJobPriorityResult = null)
    {
      $this->GetJobPriorityResult = $GetJobPriorityResult;
    }

    /**
     * @return int
     */
    public function getGetJobPriorityResult()
    {
      return $this->GetJobPriorityResult;
    }

    /**
     * @param int $GetJobPriorityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetJobPriorityResponse
     */
    public function setGetJobPriorityResult($GetJobPriorityResult)
    {
      $this->GetJobPriorityResult = $GetJobPriorityResult;
      return $this;
    }

}
