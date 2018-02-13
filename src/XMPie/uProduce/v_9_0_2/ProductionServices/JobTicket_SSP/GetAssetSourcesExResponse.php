<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetAssetSourcesExResponse
{

    /**
     * @var ArrayOfAssetSourceInfo $GetAssetSourcesExResult
     */
    protected $GetAssetSourcesExResult = null;

    /**
     * @param ArrayOfAssetSourceInfo $GetAssetSourcesExResult
     */
    public function __construct($GetAssetSourcesExResult = null)
    {
      $this->GetAssetSourcesExResult = $GetAssetSourcesExResult;
    }

    /**
     * @return ArrayOfAssetSourceInfo
     */
    public function getGetAssetSourcesExResult()
    {
      return $this->GetAssetSourcesExResult;
    }

    /**
     * @param ArrayOfAssetSourceInfo $GetAssetSourcesExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetAssetSourcesExResponse
     */
    public function setGetAssetSourcesExResult($GetAssetSourcesExResult)
    {
      $this->GetAssetSourcesExResult = $GetAssetSourcesExResult;
      return $this;
    }

}
