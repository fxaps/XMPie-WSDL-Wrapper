<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetPlanPathResponse
{

    /**
     * @var string $GetPlanPathResult
     */
    protected $GetPlanPathResult = null;

    /**
     * @param string $GetPlanPathResult
     */
    public function __construct($GetPlanPathResult = null)
    {
      $this->GetPlanPathResult = $GetPlanPathResult;
    }

    /**
     * @return string
     */
    public function getGetPlanPathResult()
    {
      return $this->GetPlanPathResult;
    }

    /**
     * @param string $GetPlanPathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetPlanPathResponse
     */
    public function setGetPlanPathResult($GetPlanPathResult)
    {
      $this->GetPlanPathResult = $GetPlanPathResult;
      return $this;
    }

}
