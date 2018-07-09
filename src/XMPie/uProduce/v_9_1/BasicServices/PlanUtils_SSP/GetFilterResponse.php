<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class GetFilterResponse
{

    /**
     * @var PlanFilter $GetFilterResult
     */
    protected $GetFilterResult = null;

    /**
     * @param PlanFilter $GetFilterResult
     */
    public function __construct($GetFilterResult = null)
    {
      $this->GetFilterResult = $GetFilterResult;
    }

    /**
     * @return PlanFilter
     */
    public function getGetFilterResult()
    {
      return $this->GetFilterResult;
    }

    /**
     * @param PlanFilter $GetFilterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetFilterResponse
     */
    public function setGetFilterResult($GetFilterResult)
    {
      $this->GetFilterResult = $GetFilterResult;
      return $this;
    }

}
