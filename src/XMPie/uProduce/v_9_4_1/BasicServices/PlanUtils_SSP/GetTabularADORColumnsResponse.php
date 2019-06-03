<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\PlanUtils_SSP;

class GetTabularADORColumnsResponse
{

    /**
     * @var ArrayOfPlanTabularColumn $GetTabularADORColumnsResult
     */
    protected $GetTabularADORColumnsResult = null;

    /**
     * @param ArrayOfPlanTabularColumn $GetTabularADORColumnsResult
     */
    public function __construct($GetTabularADORColumnsResult = null)
    {
      $this->GetTabularADORColumnsResult = $GetTabularADORColumnsResult;
    }

    /**
     * @return ArrayOfPlanTabularColumn
     */
    public function getGetTabularADORColumnsResult()
    {
      return $this->GetTabularADORColumnsResult;
    }

    /**
     * @param ArrayOfPlanTabularColumn $GetTabularADORColumnsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\PlanUtils_SSP\GetTabularADORColumnsResponse
     */
    public function setGetTabularADORColumnsResult($GetTabularADORColumnsResult)
    {
      $this->GetTabularADORColumnsResult = $GetTabularADORColumnsResult;
      return $this;
    }

}
