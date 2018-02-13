<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP;

class GetFiltersResponse
{

    /**
     * @var ArrayOfPlanFilter $GetFiltersResult
     */
    protected $GetFiltersResult = null;

    /**
     * @param ArrayOfPlanFilter $GetFiltersResult
     */
    public function __construct($GetFiltersResult = null)
    {
      $this->GetFiltersResult = $GetFiltersResult;
    }

    /**
     * @return ArrayOfPlanFilter
     */
    public function getGetFiltersResult()
    {
      return $this->GetFiltersResult;
    }

    /**
     * @param ArrayOfPlanFilter $GetFiltersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP\GetFiltersResponse
     */
    public function setGetFiltersResult($GetFiltersResult)
    {
      $this->GetFiltersResult = $GetFiltersResult;
      return $this;
    }

}
