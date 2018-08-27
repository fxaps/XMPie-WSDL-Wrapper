<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetAssetSourcesByIDResponse
{

    /**
     * @var boolean $SetAssetSourcesByIDResult
     */
    protected $SetAssetSourcesByIDResult = null;

    /**
     * @param boolean $SetAssetSourcesByIDResult
     */
    public function __construct($SetAssetSourcesByIDResult = null)
    {
      $this->SetAssetSourcesByIDResult = $SetAssetSourcesByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetSourcesByIDResult()
    {
      return $this->SetAssetSourcesByIDResult;
    }

    /**
     * @param boolean $SetAssetSourcesByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetAssetSourcesByIDResponse
     */
    public function setSetAssetSourcesByIDResult($SetAssetSourcesByIDResult)
    {
      $this->SetAssetSourcesByIDResult = $SetAssetSourcesByIDResult;
      return $this;
    }

}
