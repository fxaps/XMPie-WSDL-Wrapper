<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class SetAssetSourcesResponse
{

    /**
     * @var boolean $SetAssetSourcesResult
     */
    protected $SetAssetSourcesResult = null;

    /**
     * @param boolean $SetAssetSourcesResult
     */
    public function __construct($SetAssetSourcesResult = null)
    {
      $this->SetAssetSourcesResult = $SetAssetSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetSourcesResult()
    {
      return $this->SetAssetSourcesResult;
    }

    /**
     * @param boolean $SetAssetSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetAssetSourcesResponse
     */
    public function setSetAssetSourcesResult($SetAssetSourcesResult)
    {
      $this->SetAssetSourcesResult = $SetAssetSourcesResult;
      return $this;
    }

}
