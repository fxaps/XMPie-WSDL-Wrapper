<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class GetCircleRunGuidResponse
{

    /**
     * @var string $GetCircleRunGuidResult
     */
    protected $GetCircleRunGuidResult = null;

    /**
     * @param string $GetCircleRunGuidResult
     */
    public function __construct($GetCircleRunGuidResult = null)
    {
      $this->GetCircleRunGuidResult = $GetCircleRunGuidResult;
    }

    /**
     * @return string
     */
    public function getGetCircleRunGuidResult()
    {
      return $this->GetCircleRunGuidResult;
    }

    /**
     * @param string $GetCircleRunGuidResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetCircleRunGuidResponse
     */
    public function setGetCircleRunGuidResult($GetCircleRunGuidResult)
    {
      $this->GetCircleRunGuidResult = $GetCircleRunGuidResult;
      return $this;
    }

}
