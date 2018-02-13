<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetAssetSourceResponse
{

    /**
     * @var AssetSourceStruct $GetAssetSourceResult
     */
    protected $GetAssetSourceResult = null;

    /**
     * @param AssetSourceStruct $GetAssetSourceResult
     */
    public function __construct($GetAssetSourceResult = null)
    {
      $this->GetAssetSourceResult = $GetAssetSourceResult;
    }

    /**
     * @return AssetSourceStruct
     */
    public function getGetAssetSourceResult()
    {
      return $this->GetAssetSourceResult;
    }

    /**
     * @param AssetSourceStruct $GetAssetSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetAssetSourceResponse
     */
    public function setGetAssetSourceResult($GetAssetSourceResult)
    {
      $this->GetAssetSourceResult = $GetAssetSourceResult;
      return $this;
    }

}
