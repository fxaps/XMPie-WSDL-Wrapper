<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class IsFFPMDeleteSourceResponse
{

    /**
     * @var boolean $IsFFPMDeleteSourceResult
     */
    protected $IsFFPMDeleteSourceResult = null;

    /**
     * @param boolean $IsFFPMDeleteSourceResult
     */
    public function __construct($IsFFPMDeleteSourceResult = null)
    {
      $this->IsFFPMDeleteSourceResult = $IsFFPMDeleteSourceResult;
    }

    /**
     * @return boolean
     */
    public function getIsFFPMDeleteSourceResult()
    {
      return $this->IsFFPMDeleteSourceResult;
    }

    /**
     * @param boolean $IsFFPMDeleteSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\IsFFPMDeleteSourceResponse
     */
    public function setIsFFPMDeleteSourceResult($IsFFPMDeleteSourceResult)
    {
      $this->IsFFPMDeleteSourceResult = $IsFFPMDeleteSourceResult;
      return $this;
    }

}
