<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetAssetSourceExResponse
{

    /**
     * @var AssetSourceInfo $GetAssetSourceExResult
     */
    protected $GetAssetSourceExResult = null;

    /**
     * @param AssetSourceInfo $GetAssetSourceExResult
     */
    public function __construct($GetAssetSourceExResult = null)
    {
      $this->GetAssetSourceExResult = $GetAssetSourceExResult;
    }

    /**
     * @return AssetSourceInfo
     */
    public function getGetAssetSourceExResult()
    {
      return $this->GetAssetSourceExResult;
    }

    /**
     * @param AssetSourceInfo $GetAssetSourceExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetAssetSourceExResponse
     */
    public function setGetAssetSourceExResult($GetAssetSourceExResult)
    {
      $this->GetAssetSourceExResult = $GetAssetSourceExResult;
      return $this;
    }

}
