<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetNthAssetSourcePriorityResponse
{

    /**
     * @var int $GetNthAssetSourcePriorityResult
     */
    protected $GetNthAssetSourcePriorityResult = null;

    /**
     * @param int $GetNthAssetSourcePriorityResult
     */
    public function __construct($GetNthAssetSourcePriorityResult = null)
    {
      $this->GetNthAssetSourcePriorityResult = $GetNthAssetSourcePriorityResult;
    }

    /**
     * @return int
     */
    public function getGetNthAssetSourcePriorityResult()
    {
      return $this->GetNthAssetSourcePriorityResult;
    }

    /**
     * @param int $GetNthAssetSourcePriorityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetNthAssetSourcePriorityResponse
     */
    public function setGetNthAssetSourcePriorityResult($GetNthAssetSourcePriorityResult)
    {
      $this->GetNthAssetSourcePriorityResult = $GetNthAssetSourcePriorityResult;
      return $this;
    }

}
