<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class IsFriendlyUrlUseRIDPrefixModeResponse
{

    /**
     * @var boolean $IsFriendlyUrlUseRIDPrefixModeResult
     */
    protected $IsFriendlyUrlUseRIDPrefixModeResult = null;

    /**
     * @param boolean $IsFriendlyUrlUseRIDPrefixModeResult
     */
    public function __construct($IsFriendlyUrlUseRIDPrefixModeResult = null)
    {
      $this->IsFriendlyUrlUseRIDPrefixModeResult = $IsFriendlyUrlUseRIDPrefixModeResult;
    }

    /**
     * @return boolean
     */
    public function getIsFriendlyUrlUseRIDPrefixModeResult()
    {
      return $this->IsFriendlyUrlUseRIDPrefixModeResult;
    }

    /**
     * @param boolean $IsFriendlyUrlUseRIDPrefixModeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\IsFriendlyUrlUseRIDPrefixModeResponse
     */
    public function setIsFriendlyUrlUseRIDPrefixModeResult($IsFriendlyUrlUseRIDPrefixModeResult)
    {
      $this->IsFriendlyUrlUseRIDPrefixModeResult = $IsFriendlyUrlUseRIDPrefixModeResult;
      return $this;
    }

}
