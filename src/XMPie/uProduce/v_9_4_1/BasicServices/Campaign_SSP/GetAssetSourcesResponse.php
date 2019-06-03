<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class GetAssetSourcesResponse
{

    /**
     * @var ArrayOfString $GetAssetSourcesResult
     */
    protected $GetAssetSourcesResult = null;

    /**
     * @param ArrayOfString $GetAssetSourcesResult
     */
    public function __construct($GetAssetSourcesResult = null)
    {
      $this->GetAssetSourcesResult = $GetAssetSourcesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAssetSourcesResult()
    {
      return $this->GetAssetSourcesResult;
    }

    /**
     * @param ArrayOfString $GetAssetSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourcesResponse
     */
    public function setGetAssetSourcesResult($GetAssetSourcesResult)
    {
      $this->GetAssetSourcesResult = $GetAssetSourcesResult;
      return $this;
    }

}
