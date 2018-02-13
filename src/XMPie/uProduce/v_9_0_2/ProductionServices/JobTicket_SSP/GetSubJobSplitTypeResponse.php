<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetSubJobSplitTypeResponse
{

    /**
     * @var int $GetSubJobSplitTypeResult
     */
    protected $GetSubJobSplitTypeResult = null;

    /**
     * @param int $GetSubJobSplitTypeResult
     */
    public function __construct($GetSubJobSplitTypeResult = null)
    {
      $this->GetSubJobSplitTypeResult = $GetSubJobSplitTypeResult;
    }

    /**
     * @return int
     */
    public function getGetSubJobSplitTypeResult()
    {
      return $this->GetSubJobSplitTypeResult;
    }

    /**
     * @param int $GetSubJobSplitTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetSubJobSplitTypeResponse
     */
    public function setGetSubJobSplitTypeResult($GetSubJobSplitTypeResult)
    {
      $this->GetSubJobSplitTypeResult = $GetSubJobSplitTypeResult;
      return $this;
    }

}
