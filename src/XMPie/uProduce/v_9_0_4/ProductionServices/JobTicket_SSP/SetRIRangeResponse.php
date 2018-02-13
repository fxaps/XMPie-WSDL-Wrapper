<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class SetRIRangeResponse
{

    /**
     * @var boolean $SetRIRangeResult
     */
    protected $SetRIRangeResult = null;

    /**
     * @param boolean $SetRIRangeResult
     */
    public function __construct($SetRIRangeResult = null)
    {
      $this->SetRIRangeResult = $SetRIRangeResult;
    }

    /**
     * @return boolean
     */
    public function getSetRIRangeResult()
    {
      return $this->SetRIRangeResult;
    }

    /**
     * @param boolean $SetRIRangeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetRIRangeResponse
     */
    public function setSetRIRangeResult($SetRIRangeResult)
    {
      $this->SetRIRangeResult = $SetRIRangeResult;
      return $this;
    }

}
