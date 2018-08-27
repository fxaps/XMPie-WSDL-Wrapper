<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP;

class GetUserViewsResponse
{

    /**
     * @var ArrayOfPlanObject $GetUserViewsResult
     */
    protected $GetUserViewsResult = null;

    /**
     * @param ArrayOfPlanObject $GetUserViewsResult
     */
    public function __construct($GetUserViewsResult = null)
    {
      $this->GetUserViewsResult = $GetUserViewsResult;
    }

    /**
     * @return ArrayOfPlanObject
     */
    public function getGetUserViewsResult()
    {
      return $this->GetUserViewsResult;
    }

    /**
     * @param ArrayOfPlanObject $GetUserViewsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\GetUserViewsResponse
     */
    public function setGetUserViewsResult($GetUserViewsResult)
    {
      $this->GetUserViewsResult = $GetUserViewsResult;
      return $this;
    }

}
