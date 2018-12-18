<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP;

class GetPlanDataSetResponse
{

    /**
     * @var GetPlanDataSetResult $GetPlanDataSetResult
     */
    protected $GetPlanDataSetResult = null;

    /**
     * @param GetPlanDataSetResult $GetPlanDataSetResult
     */
    public function __construct($GetPlanDataSetResult = null)
    {
      $this->GetPlanDataSetResult = $GetPlanDataSetResult;
    }

    /**
     * @return GetPlanDataSetResult
     */
    public function getGetPlanDataSetResult()
    {
      return $this->GetPlanDataSetResult;
    }

    /**
     * @param GetPlanDataSetResult $GetPlanDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\GetPlanDataSetResponse
     */
    public function setGetPlanDataSetResult($GetPlanDataSetResult)
    {
      $this->GetPlanDataSetResult = $GetPlanDataSetResult;
      return $this;
    }

}
