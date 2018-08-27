<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP;

class GetAssetSourceProviderSupportResponse
{

    /**
     * @var AssetSourceProviderSupport $GetAssetSourceProviderSupportResult
     */
    protected $GetAssetSourceProviderSupportResult = null;

    /**
     * @param AssetSourceProviderSupport $GetAssetSourceProviderSupportResult
     */
    public function __construct($GetAssetSourceProviderSupportResult = null)
    {
      $this->GetAssetSourceProviderSupportResult = $GetAssetSourceProviderSupportResult;
    }

    /**
     * @return AssetSourceProviderSupport
     */
    public function getGetAssetSourceProviderSupportResult()
    {
      return $this->GetAssetSourceProviderSupportResult;
    }

    /**
     * @param AssetSourceProviderSupport $GetAssetSourceProviderSupportResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\GetAssetSourceProviderSupportResponse
     */
    public function setGetAssetSourceProviderSupportResult($GetAssetSourceProviderSupportResult)
    {
      $this->GetAssetSourceProviderSupportResult = $GetAssetSourceProviderSupportResult;
      return $this;
    }

}
