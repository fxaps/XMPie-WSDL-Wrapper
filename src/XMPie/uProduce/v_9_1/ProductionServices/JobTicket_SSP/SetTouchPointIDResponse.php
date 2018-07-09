<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class SetTouchPointIDResponse
{

    /**
     * @var boolean $SetTouchPointIDResult
     */
    protected $SetTouchPointIDResult = null;

    /**
     * @param boolean $SetTouchPointIDResult
     */
    public function __construct($SetTouchPointIDResult = null)
    {
      $this->SetTouchPointIDResult = $SetTouchPointIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetTouchPointIDResult()
    {
      return $this->SetTouchPointIDResult;
    }

    /**
     * @param boolean $SetTouchPointIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetTouchPointIDResponse
     */
    public function setSetTouchPointIDResult($SetTouchPointIDResult)
    {
      $this->SetTouchPointIDResult = $SetTouchPointIDResult;
      return $this;
    }

}
