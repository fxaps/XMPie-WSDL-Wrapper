<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP;

class IsPlanSubsetOfComparedPlanResponse
{

    /**
     * @var boolean $IsPlanSubsetOfComparedPlanResult
     */
    protected $IsPlanSubsetOfComparedPlanResult = null;

    /**
     * @param boolean $IsPlanSubsetOfComparedPlanResult
     */
    public function __construct($IsPlanSubsetOfComparedPlanResult = null)
    {
      $this->IsPlanSubsetOfComparedPlanResult = $IsPlanSubsetOfComparedPlanResult;
    }

    /**
     * @return boolean
     */
    public function getIsPlanSubsetOfComparedPlanResult()
    {
      return $this->IsPlanSubsetOfComparedPlanResult;
    }

    /**
     * @param boolean $IsPlanSubsetOfComparedPlanResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\IsPlanSubsetOfComparedPlanResponse
     */
    public function setIsPlanSubsetOfComparedPlanResult($IsPlanSubsetOfComparedPlanResult)
    {
      $this->IsPlanSubsetOfComparedPlanResult = $IsPlanSubsetOfComparedPlanResult;
      return $this;
    }

}
