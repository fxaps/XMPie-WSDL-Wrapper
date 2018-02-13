<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class RemoveAssetSourceResponse
{

    /**
     * @var boolean $RemoveAssetSourceResult
     */
    protected $RemoveAssetSourceResult = null;

    /**
     * @param boolean $RemoveAssetSourceResult
     */
    public function __construct($RemoveAssetSourceResult = null)
    {
      $this->RemoveAssetSourceResult = $RemoveAssetSourceResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAssetSourceResult()
    {
      return $this->RemoveAssetSourceResult;
    }

    /**
     * @param boolean $RemoveAssetSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\RemoveAssetSourceResponse
     */
    public function setRemoveAssetSourceResult($RemoveAssetSourceResult)
    {
      $this->RemoveAssetSourceResult = $RemoveAssetSourceResult;
      return $this;
    }

}
