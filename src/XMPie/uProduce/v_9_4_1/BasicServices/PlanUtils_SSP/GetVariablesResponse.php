<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\PlanUtils_SSP;

class GetVariablesResponse
{

    /**
     * @var ArrayOfPlanObject $GetVariablesResult
     */
    protected $GetVariablesResult = null;

    /**
     * @param ArrayOfPlanObject $GetVariablesResult
     */
    public function __construct($GetVariablesResult = null)
    {
      $this->GetVariablesResult = $GetVariablesResult;
    }

    /**
     * @return ArrayOfPlanObject
     */
    public function getGetVariablesResult()
    {
      return $this->GetVariablesResult;
    }

    /**
     * @param ArrayOfPlanObject $GetVariablesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\PlanUtils_SSP\GetVariablesResponse
     */
    public function setGetVariablesResult($GetVariablesResult)
    {
      $this->GetVariablesResult = $GetVariablesResult;
      return $this;
    }

}
