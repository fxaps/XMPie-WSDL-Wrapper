<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetUseTrivialPlanResponse
{

    /**
     * @var boolean $GetUseTrivialPlanResult
     */
    protected $GetUseTrivialPlanResult = null;

    /**
     * @param boolean $GetUseTrivialPlanResult
     */
    public function __construct($GetUseTrivialPlanResult = null)
    {
      $this->GetUseTrivialPlanResult = $GetUseTrivialPlanResult;
    }

    /**
     * @return boolean
     */
    public function getGetUseTrivialPlanResult()
    {
      return $this->GetUseTrivialPlanResult;
    }

    /**
     * @param boolean $GetUseTrivialPlanResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetUseTrivialPlanResponse
     */
    public function setGetUseTrivialPlanResult($GetUseTrivialPlanResult)
    {
      $this->GetUseTrivialPlanResult = $GetUseTrivialPlanResult;
      return $this;
    }

}
