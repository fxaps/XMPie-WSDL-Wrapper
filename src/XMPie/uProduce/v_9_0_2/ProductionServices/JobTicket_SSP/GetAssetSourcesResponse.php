<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetAssetSourcesResponse
{

    /**
     * @var ArrayOfAssetSourceStruct $GetAssetSourcesResult
     */
    protected $GetAssetSourcesResult = null;

    /**
     * @param ArrayOfAssetSourceStruct $GetAssetSourcesResult
     */
    public function __construct($GetAssetSourcesResult = null)
    {
      $this->GetAssetSourcesResult = $GetAssetSourcesResult;
    }

    /**
     * @return ArrayOfAssetSourceStruct
     */
    public function getGetAssetSourcesResult()
    {
      return $this->GetAssetSourcesResult;
    }

    /**
     * @param ArrayOfAssetSourceStruct $GetAssetSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetAssetSourcesResponse
     */
    public function setGetAssetSourcesResult($GetAssetSourcesResult)
    {
      $this->GetAssetSourcesResult = $GetAssetSourcesResult;
      return $this;
    }

}
