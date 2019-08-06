<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetUseTrivialPlanResponse
{

    /**
     * @var boolean $SetUseTrivialPlanResult
     */
    protected $SetUseTrivialPlanResult = null;

    /**
     * @param boolean $SetUseTrivialPlanResult
     */
    public function __construct($SetUseTrivialPlanResult = null)
    {
      $this->SetUseTrivialPlanResult = $SetUseTrivialPlanResult;
    }

    /**
     * @return boolean
     */
    public function getSetUseTrivialPlanResult()
    {
      return $this->SetUseTrivialPlanResult;
    }

    /**
     * @param boolean $SetUseTrivialPlanResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetUseTrivialPlanResponse
     */
    public function setSetUseTrivialPlanResult($SetUseTrivialPlanResult)
    {
      $this->SetUseTrivialPlanResult = $SetUseTrivialPlanResult;
      return $this;
    }

}
