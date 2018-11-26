<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP;

class GetObjectsResponse
{

    /**
     * @var ArrayOfPlanObject $GetObjectsResult
     */
    protected $GetObjectsResult = null;

    /**
     * @param ArrayOfPlanObject $GetObjectsResult
     */
    public function __construct($GetObjectsResult = null)
    {
      $this->GetObjectsResult = $GetObjectsResult;
    }

    /**
     * @return ArrayOfPlanObject
     */
    public function getGetObjectsResult()
    {
      return $this->GetObjectsResult;
    }

    /**
     * @param ArrayOfPlanObject $GetObjectsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetObjectsResponse
     */
    public function setGetObjectsResult($GetObjectsResult)
    {
      $this->GetObjectsResult = $GetObjectsResult;
      return $this;
    }

}
