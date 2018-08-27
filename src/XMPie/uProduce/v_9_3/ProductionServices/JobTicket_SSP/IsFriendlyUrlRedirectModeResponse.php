<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class IsFriendlyUrlRedirectModeResponse
{

    /**
     * @var boolean $IsFriendlyUrlRedirectModeResult
     */
    protected $IsFriendlyUrlRedirectModeResult = null;

    /**
     * @param boolean $IsFriendlyUrlRedirectModeResult
     */
    public function __construct($IsFriendlyUrlRedirectModeResult = null)
    {
      $this->IsFriendlyUrlRedirectModeResult = $IsFriendlyUrlRedirectModeResult;
    }

    /**
     * @return boolean
     */
    public function getIsFriendlyUrlRedirectModeResult()
    {
      return $this->IsFriendlyUrlRedirectModeResult;
    }

    /**
     * @param boolean $IsFriendlyUrlRedirectModeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\IsFriendlyUrlRedirectModeResponse
     */
    public function setIsFriendlyUrlRedirectModeResult($IsFriendlyUrlRedirectModeResult)
    {
      $this->IsFriendlyUrlRedirectModeResult = $IsFriendlyUrlRedirectModeResult;
      return $this;
    }

}
