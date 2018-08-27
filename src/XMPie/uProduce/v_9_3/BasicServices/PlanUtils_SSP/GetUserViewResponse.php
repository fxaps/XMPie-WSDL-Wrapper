<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP;

class GetUserViewResponse
{

    /**
     * @var PlanObject $GetUserViewResult
     */
    protected $GetUserViewResult = null;

    /**
     * @param PlanObject $GetUserViewResult
     */
    public function __construct($GetUserViewResult = null)
    {
      $this->GetUserViewResult = $GetUserViewResult;
    }

    /**
     * @return PlanObject
     */
    public function getGetUserViewResult()
    {
      return $this->GetUserViewResult;
    }

    /**
     * @param PlanObject $GetUserViewResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\GetUserViewResponse
     */
    public function setGetUserViewResult($GetUserViewResult)
    {
      $this->GetUserViewResult = $GetUserViewResult;
      return $this;
    }

}
