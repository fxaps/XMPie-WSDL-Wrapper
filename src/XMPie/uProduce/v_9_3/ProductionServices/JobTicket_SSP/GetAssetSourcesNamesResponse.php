<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class GetAssetSourcesNamesResponse
{

    /**
     * @var ArrayOfString $GetAssetSourcesNamesResult
     */
    protected $GetAssetSourcesNamesResult = null;

    /**
     * @param ArrayOfString $GetAssetSourcesNamesResult
     */
    public function __construct($GetAssetSourcesNamesResult = null)
    {
      $this->GetAssetSourcesNamesResult = $GetAssetSourcesNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAssetSourcesNamesResult()
    {
      return $this->GetAssetSourcesNamesResult;
    }

    /**
     * @param ArrayOfString $GetAssetSourcesNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\GetAssetSourcesNamesResponse
     */
    public function setGetAssetSourcesNamesResult($GetAssetSourcesNamesResult)
    {
      $this->GetAssetSourcesNamesResult = $GetAssetSourcesNamesResult;
      return $this;
    }

}
