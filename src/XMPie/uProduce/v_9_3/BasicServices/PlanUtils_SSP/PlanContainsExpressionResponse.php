<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP;

class PlanContainsExpressionResponse
{

    /**
     * @var ArrayOfBoolean $PlanContainsExpressionResult
     */
    protected $PlanContainsExpressionResult = null;

    /**
     * @param ArrayOfBoolean $PlanContainsExpressionResult
     */
    public function __construct($PlanContainsExpressionResult = null)
    {
      $this->PlanContainsExpressionResult = $PlanContainsExpressionResult;
    }

    /**
     * @return ArrayOfBoolean
     */
    public function getPlanContainsExpressionResult()
    {
      return $this->PlanContainsExpressionResult;
    }

    /**
     * @param ArrayOfBoolean $PlanContainsExpressionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\PlanContainsExpressionResponse
     */
    public function setPlanContainsExpressionResult($PlanContainsExpressionResult)
    {
      $this->PlanContainsExpressionResult = $PlanContainsExpressionResult;
      return $this;
    }

}
