<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class SetAutomaticSubSplitAndMergeResponse
{

    /**
     * @var boolean $SetAutomaticSubSplitAndMergeResult
     */
    protected $SetAutomaticSubSplitAndMergeResult = null;

    /**
     * @param boolean $SetAutomaticSubSplitAndMergeResult
     */
    public function __construct($SetAutomaticSubSplitAndMergeResult = null)
    {
      $this->SetAutomaticSubSplitAndMergeResult = $SetAutomaticSubSplitAndMergeResult;
    }

    /**
     * @return boolean
     */
    public function getSetAutomaticSubSplitAndMergeResult()
    {
      return $this->SetAutomaticSubSplitAndMergeResult;
    }

    /**
     * @param boolean $SetAutomaticSubSplitAndMergeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetAutomaticSubSplitAndMergeResponse
     */
    public function setSetAutomaticSubSplitAndMergeResult($SetAutomaticSubSplitAndMergeResult)
    {
      $this->SetAutomaticSubSplitAndMergeResult = $SetAutomaticSubSplitAndMergeResult;
      return $this;
    }

}
