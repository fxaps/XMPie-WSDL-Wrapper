<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP;

class GetAssetSourceResponse
{

    /**
     * @var string $GetAssetSourceResult
     */
    protected $GetAssetSourceResult = null;

    /**
     * @param string $GetAssetSourceResult
     */
    public function __construct($GetAssetSourceResult = null)
    {
      $this->GetAssetSourceResult = $GetAssetSourceResult;
    }

    /**
     * @return string
     */
    public function getGetAssetSourceResult()
    {
      return $this->GetAssetSourceResult;
    }

    /**
     * @param string $GetAssetSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetAssetSourceResponse
     */
    public function setGetAssetSourceResult($GetAssetSourceResult)
    {
      $this->GetAssetSourceResult = $GetAssetSourceResult;
      return $this;
    }

}
