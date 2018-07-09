<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP;

class IsEmptyExpressionResponse
{

    /**
     * @var boolean $IsEmptyExpressionResult
     */
    protected $IsEmptyExpressionResult = null;

    /**
     * @param boolean $IsEmptyExpressionResult
     */
    public function __construct($IsEmptyExpressionResult = null)
    {
      $this->IsEmptyExpressionResult = $IsEmptyExpressionResult;
    }

    /**
     * @return boolean
     */
    public function getIsEmptyExpressionResult()
    {
      return $this->IsEmptyExpressionResult;
    }

    /**
     * @param boolean $IsEmptyExpressionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP\IsEmptyExpressionResponse
     */
    public function setIsEmptyExpressionResult($IsEmptyExpressionResult)
    {
      $this->IsEmptyExpressionResult = $IsEmptyExpressionResult;
      return $this;
    }

}
