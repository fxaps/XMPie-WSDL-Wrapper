<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetAssetSourcesCountResponse
{

    /**
     * @var int $GetAssetSourcesCountResult
     */
    protected $GetAssetSourcesCountResult = null;

    /**
     * @param int $GetAssetSourcesCountResult
     */
    public function __construct($GetAssetSourcesCountResult = null)
    {
      $this->GetAssetSourcesCountResult = $GetAssetSourcesCountResult;
    }

    /**
     * @return int
     */
    public function getGetAssetSourcesCountResult()
    {
      return $this->GetAssetSourcesCountResult;
    }

    /**
     * @param int $GetAssetSourcesCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetAssetSourcesCountResponse
     */
    public function setGetAssetSourcesCountResult($GetAssetSourcesCountResult)
    {
      $this->GetAssetSourcesCountResult = $GetAssetSourcesCountResult;
      return $this;
    }

}
