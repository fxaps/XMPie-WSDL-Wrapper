<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetAssetSourcesIDsResponse
{

    /**
     * @var ArrayOfString $GetAssetSourcesIDsResult
     */
    protected $GetAssetSourcesIDsResult = null;

    /**
     * @param ArrayOfString $GetAssetSourcesIDsResult
     */
    public function __construct($GetAssetSourcesIDsResult = null)
    {
      $this->GetAssetSourcesIDsResult = $GetAssetSourcesIDsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAssetSourcesIDsResult()
    {
      return $this->GetAssetSourcesIDsResult;
    }

    /**
     * @param ArrayOfString $GetAssetSourcesIDsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetAssetSourcesIDsResponse
     */
    public function setGetAssetSourcesIDsResult($GetAssetSourcesIDsResult)
    {
      $this->GetAssetSourcesIDsResult = $GetAssetSourcesIDsResult;
      return $this;
    }

}
