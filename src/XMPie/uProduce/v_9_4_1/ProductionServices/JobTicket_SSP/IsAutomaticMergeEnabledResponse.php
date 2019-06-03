<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class IsAutomaticMergeEnabledResponse
{

    /**
     * @var boolean $IsAutomaticMergeEnabledResult
     */
    protected $IsAutomaticMergeEnabledResult = null;

    /**
     * @param boolean $IsAutomaticMergeEnabledResult
     */
    public function __construct($IsAutomaticMergeEnabledResult = null)
    {
      $this->IsAutomaticMergeEnabledResult = $IsAutomaticMergeEnabledResult;
    }

    /**
     * @return boolean
     */
    public function getIsAutomaticMergeEnabledResult()
    {
      return $this->IsAutomaticMergeEnabledResult;
    }

    /**
     * @param boolean $IsAutomaticMergeEnabledResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\IsAutomaticMergeEnabledResponse
     */
    public function setIsAutomaticMergeEnabledResult($IsAutomaticMergeEnabledResult)
    {
      $this->IsAutomaticMergeEnabledResult = $IsAutomaticMergeEnabledResult;
      return $this;
    }

}
