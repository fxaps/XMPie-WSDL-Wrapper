<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP;

class GetAssetSourceInfoExResponse
{

    /**
     * @var AssetSourceInfo $GetAssetSourceInfoExResult
     */
    protected $GetAssetSourceInfoExResult = null;

    /**
     * @param AssetSourceInfo $GetAssetSourceInfoExResult
     */
    public function __construct($GetAssetSourceInfoExResult = null)
    {
      $this->GetAssetSourceInfoExResult = $GetAssetSourceInfoExResult;
    }

    /**
     * @return AssetSourceInfo
     */
    public function getGetAssetSourceInfoExResult()
    {
      return $this->GetAssetSourceInfoExResult;
    }

    /**
     * @param AssetSourceInfo $GetAssetSourceInfoExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\GetAssetSourceInfoExResponse
     */
    public function setGetAssetSourceInfoExResult($GetAssetSourceInfoExResult)
    {
      $this->GetAssetSourceInfoExResult = $GetAssetSourceInfoExResult;
      return $this;
    }

}
