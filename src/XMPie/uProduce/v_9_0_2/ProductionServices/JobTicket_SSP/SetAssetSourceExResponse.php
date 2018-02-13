<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class SetAssetSourceExResponse
{

    /**
     * @var boolean $SetAssetSourceExResult
     */
    protected $SetAssetSourceExResult = null;

    /**
     * @param boolean $SetAssetSourceExResult
     */
    public function __construct($SetAssetSourceExResult = null)
    {
      $this->SetAssetSourceExResult = $SetAssetSourceExResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetSourceExResult()
    {
      return $this->SetAssetSourceExResult;
    }

    /**
     * @param boolean $SetAssetSourceExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetAssetSourceExResponse
     */
    public function setSetAssetSourceExResult($SetAssetSourceExResult)
    {
      $this->SetAssetSourceExResult = $SetAssetSourceExResult;
      return $this;
    }

}
