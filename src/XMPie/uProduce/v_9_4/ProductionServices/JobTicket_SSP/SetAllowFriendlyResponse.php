<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetAllowFriendlyResponse
{

    /**
     * @var boolean $SetAllowFriendlyResult
     */
    protected $SetAllowFriendlyResult = null;

    /**
     * @param boolean $SetAllowFriendlyResult
     */
    public function __construct($SetAllowFriendlyResult = null)
    {
      $this->SetAllowFriendlyResult = $SetAllowFriendlyResult;
    }

    /**
     * @return boolean
     */
    public function getSetAllowFriendlyResult()
    {
      return $this->SetAllowFriendlyResult;
    }

    /**
     * @param boolean $SetAllowFriendlyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetAllowFriendlyResponse
     */
    public function setSetAllowFriendlyResult($SetAllowFriendlyResult)
    {
      $this->SetAllowFriendlyResult = $SetAllowFriendlyResult;
      return $this;
    }

}
