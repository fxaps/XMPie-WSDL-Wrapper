<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetNthAssetSourceResponse
{

    /**
     * @var AssetSourceStruct $GetNthAssetSourceResult
     */
    protected $GetNthAssetSourceResult = null;

    /**
     * @param AssetSourceStruct $GetNthAssetSourceResult
     */
    public function __construct($GetNthAssetSourceResult = null)
    {
      $this->GetNthAssetSourceResult = $GetNthAssetSourceResult;
    }

    /**
     * @return AssetSourceStruct
     */
    public function getGetNthAssetSourceResult()
    {
      return $this->GetNthAssetSourceResult;
    }

    /**
     * @param AssetSourceStruct $GetNthAssetSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetNthAssetSourceResponse
     */
    public function setGetNthAssetSourceResult($GetNthAssetSourceResult)
    {
      $this->GetNthAssetSourceResult = $GetNthAssetSourceResult;
      return $this;
    }

}
