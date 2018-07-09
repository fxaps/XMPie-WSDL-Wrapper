<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetNthAssetSourceExResponse
{

    /**
     * @var AssetSourceInfo $GetNthAssetSourceExResult
     */
    protected $GetNthAssetSourceExResult = null;

    /**
     * @param AssetSourceInfo $GetNthAssetSourceExResult
     */
    public function __construct($GetNthAssetSourceExResult = null)
    {
      $this->GetNthAssetSourceExResult = $GetNthAssetSourceExResult;
    }

    /**
     * @return AssetSourceInfo
     */
    public function getGetNthAssetSourceExResult()
    {
      return $this->GetNthAssetSourceExResult;
    }

    /**
     * @param AssetSourceInfo $GetNthAssetSourceExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetNthAssetSourceExResponse
     */
    public function setGetNthAssetSourceExResult($GetNthAssetSourceExResult)
    {
      $this->GetNthAssetSourceExResult = $GetNthAssetSourceExResult;
      return $this;
    }

}
