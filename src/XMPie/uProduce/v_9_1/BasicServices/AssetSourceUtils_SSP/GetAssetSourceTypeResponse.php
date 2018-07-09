<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\AssetSourceUtils_SSP;

class GetAssetSourceTypeResponse
{

    /**
     * @var GetAssetSourceTypeResult $GetAssetSourceTypeResult
     */
    protected $GetAssetSourceTypeResult = null;

    /**
     * @param GetAssetSourceTypeResult $GetAssetSourceTypeResult
     */
    public function __construct($GetAssetSourceTypeResult = null)
    {
      $this->GetAssetSourceTypeResult = $GetAssetSourceTypeResult;
    }

    /**
     * @return GetAssetSourceTypeResult
     */
    public function getGetAssetSourceTypeResult()
    {
      return $this->GetAssetSourceTypeResult;
    }

    /**
     * @param GetAssetSourceTypeResult $GetAssetSourceTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypeResponse
     */
    public function setGetAssetSourceTypeResult($GetAssetSourceTypeResult)
    {
      $this->GetAssetSourceTypeResult = $GetAssetSourceTypeResult;
      return $this;
    }

}
