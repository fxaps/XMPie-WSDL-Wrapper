<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SetInfoByRunGUIDResponse
{

    /**
     * @var boolean $SetInfoByRunGUIDResult
     */
    protected $SetInfoByRunGUIDResult = null;

    /**
     * @param boolean $SetInfoByRunGUIDResult
     */
    public function __construct($SetInfoByRunGUIDResult = null)
    {
      $this->SetInfoByRunGUIDResult = $SetInfoByRunGUIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetInfoByRunGUIDResult()
    {
      return $this->SetInfoByRunGUIDResult;
    }

    /**
     * @param boolean $SetInfoByRunGUIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetInfoByRunGUIDResponse
     */
    public function setSetInfoByRunGUIDResult($SetInfoByRunGUIDResult)
    {
      $this->SetInfoByRunGUIDResult = $SetInfoByRunGUIDResult;
      return $this;
    }

}
