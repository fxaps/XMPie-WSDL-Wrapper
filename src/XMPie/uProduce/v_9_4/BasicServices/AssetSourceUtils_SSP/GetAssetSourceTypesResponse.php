<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\AssetSourceUtils_SSP;

class GetAssetSourceTypesResponse
{

    /**
     * @var GetAssetSourceTypesResult $GetAssetSourceTypesResult
     */
    protected $GetAssetSourceTypesResult = null;

    /**
     * @param GetAssetSourceTypesResult $GetAssetSourceTypesResult
     */
    public function __construct($GetAssetSourceTypesResult = null)
    {
      $this->GetAssetSourceTypesResult = $GetAssetSourceTypesResult;
    }

    /**
     * @return GetAssetSourceTypesResult
     */
    public function getGetAssetSourceTypesResult()
    {
      return $this->GetAssetSourceTypesResult;
    }

    /**
     * @param GetAssetSourceTypesResult $GetAssetSourceTypesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypesResponse
     */
    public function setGetAssetSourceTypesResult($GetAssetSourceTypesResult)
    {
      $this->GetAssetSourceTypesResult = $GetAssetSourceTypesResult;
      return $this;
    }

}
