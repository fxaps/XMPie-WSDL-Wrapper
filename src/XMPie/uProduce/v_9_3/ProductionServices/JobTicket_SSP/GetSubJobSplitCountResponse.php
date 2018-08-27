<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class GetSubJobSplitCountResponse
{

    /**
     * @var int $GetSubJobSplitCountResult
     */
    protected $GetSubJobSplitCountResult = null;

    /**
     * @param int $GetSubJobSplitCountResult
     */
    public function __construct($GetSubJobSplitCountResult = null)
    {
      $this->GetSubJobSplitCountResult = $GetSubJobSplitCountResult;
    }

    /**
     * @return int
     */
    public function getGetSubJobSplitCountResult()
    {
      return $this->GetSubJobSplitCountResult;
    }

    /**
     * @param int $GetSubJobSplitCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\GetSubJobSplitCountResponse
     */
    public function setGetSubJobSplitCountResult($GetSubJobSplitCountResult)
    {
      $this->GetSubJobSplitCountResult = $GetSubJobSplitCountResult;
      return $this;
    }

}
