<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP;

class GetTabularADORColumnResponse
{

    /**
     * @var PlanTabularColumn $GetTabularADORColumnResult
     */
    protected $GetTabularADORColumnResult = null;

    /**
     * @param PlanTabularColumn $GetTabularADORColumnResult
     */
    public function __construct($GetTabularADORColumnResult = null)
    {
      $this->GetTabularADORColumnResult = $GetTabularADORColumnResult;
    }

    /**
     * @return PlanTabularColumn
     */
    public function getGetTabularADORColumnResult()
    {
      return $this->GetTabularADORColumnResult;
    }

    /**
     * @param PlanTabularColumn $GetTabularADORColumnResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP\GetTabularADORColumnResponse
     */
    public function setGetTabularADORColumnResult($GetTabularADORColumnResult)
    {
      $this->GetTabularADORColumnResult = $GetTabularADORColumnResult;
      return $this;
    }

}
