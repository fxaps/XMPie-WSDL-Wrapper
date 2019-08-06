<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetAssetSourceResponse
{

    /**
     * @var boolean $SetAssetSourceResult
     */
    protected $SetAssetSourceResult = null;

    /**
     * @param boolean $SetAssetSourceResult
     */
    public function __construct($SetAssetSourceResult = null)
    {
      $this->SetAssetSourceResult = $SetAssetSourceResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetSourceResult()
    {
      return $this->SetAssetSourceResult;
    }

    /**
     * @param boolean $SetAssetSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetAssetSourceResponse
     */
    public function setSetAssetSourceResult($SetAssetSourceResult)
    {
      $this->SetAssetSourceResult = $SetAssetSourceResult;
      return $this;
    }

}
