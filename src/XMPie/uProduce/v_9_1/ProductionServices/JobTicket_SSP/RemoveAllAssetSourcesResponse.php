<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class RemoveAllAssetSourcesResponse
{

    /**
     * @var boolean $RemoveAllAssetSourcesResult
     */
    protected $RemoveAllAssetSourcesResult = null;

    /**
     * @param boolean $RemoveAllAssetSourcesResult
     */
    public function __construct($RemoveAllAssetSourcesResult = null)
    {
      $this->RemoveAllAssetSourcesResult = $RemoveAllAssetSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllAssetSourcesResult()
    {
      return $this->RemoveAllAssetSourcesResult;
    }

    /**
     * @param boolean $RemoveAllAssetSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\RemoveAllAssetSourcesResponse
     */
    public function setRemoveAllAssetSourcesResult($RemoveAllAssetSourcesResult)
    {
      $this->RemoveAllAssetSourcesResult = $RemoveAllAssetSourcesResult;
      return $this;
    }

}
