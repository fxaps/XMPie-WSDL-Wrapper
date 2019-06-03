<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class IsAutomaticSubSplitEnabledResponse
{

    /**
     * @var boolean $IsAutomaticSubSplitEnabledResult
     */
    protected $IsAutomaticSubSplitEnabledResult = null;

    /**
     * @param boolean $IsAutomaticSubSplitEnabledResult
     */
    public function __construct($IsAutomaticSubSplitEnabledResult = null)
    {
      $this->IsAutomaticSubSplitEnabledResult = $IsAutomaticSubSplitEnabledResult;
    }

    /**
     * @return boolean
     */
    public function getIsAutomaticSubSplitEnabledResult()
    {
      return $this->IsAutomaticSubSplitEnabledResult;
    }

    /**
     * @param boolean $IsAutomaticSubSplitEnabledResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\IsAutomaticSubSplitEnabledResponse
     */
    public function setIsAutomaticSubSplitEnabledResult($IsAutomaticSubSplitEnabledResult)
    {
      $this->IsAutomaticSubSplitEnabledResult = $IsAutomaticSubSplitEnabledResult;
      return $this;
    }

}
