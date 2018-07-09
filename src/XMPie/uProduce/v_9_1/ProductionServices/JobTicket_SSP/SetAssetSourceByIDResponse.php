<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class SetAssetSourceByIDResponse
{

    /**
     * @var boolean $SetAssetSourceByIDResult
     */
    protected $SetAssetSourceByIDResult = null;

    /**
     * @param boolean $SetAssetSourceByIDResult
     */
    public function __construct($SetAssetSourceByIDResult = null)
    {
      $this->SetAssetSourceByIDResult = $SetAssetSourceByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetSourceByIDResult()
    {
      return $this->SetAssetSourceByIDResult;
    }

    /**
     * @param boolean $SetAssetSourceByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetAssetSourceByIDResponse
     */
    public function setSetAssetSourceByIDResult($SetAssetSourceByIDResult)
    {
      $this->SetAssetSourceByIDResult = $SetAssetSourceByIDResult;
      return $this;
    }

}
