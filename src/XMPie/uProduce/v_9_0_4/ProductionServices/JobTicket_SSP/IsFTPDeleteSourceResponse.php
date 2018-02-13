<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class IsFTPDeleteSourceResponse
{

    /**
     * @var boolean $IsFTPDeleteSourceResult
     */
    protected $IsFTPDeleteSourceResult = null;

    /**
     * @param boolean $IsFTPDeleteSourceResult
     */
    public function __construct($IsFTPDeleteSourceResult = null)
    {
      $this->IsFTPDeleteSourceResult = $IsFTPDeleteSourceResult;
    }

    /**
     * @return boolean
     */
    public function getIsFTPDeleteSourceResult()
    {
      return $this->IsFTPDeleteSourceResult;
    }

    /**
     * @param boolean $IsFTPDeleteSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\IsFTPDeleteSourceResponse
     */
    public function setIsFTPDeleteSourceResult($IsFTPDeleteSourceResult)
    {
      $this->IsFTPDeleteSourceResult = $IsFTPDeleteSourceResult;
      return $this;
    }

}
