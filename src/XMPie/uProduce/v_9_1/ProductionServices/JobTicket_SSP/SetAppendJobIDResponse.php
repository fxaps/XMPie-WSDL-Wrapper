<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class SetAppendJobIDResponse
{

    /**
     * @var boolean $SetAppendJobIDResult
     */
    protected $SetAppendJobIDResult = null;

    /**
     * @param boolean $SetAppendJobIDResult
     */
    public function __construct($SetAppendJobIDResult = null)
    {
      $this->SetAppendJobIDResult = $SetAppendJobIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetAppendJobIDResult()
    {
      return $this->SetAppendJobIDResult;
    }

    /**
     * @param boolean $SetAppendJobIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetAppendJobIDResponse
     */
    public function setSetAppendJobIDResult($SetAppendJobIDResult)
    {
      $this->SetAppendJobIDResult = $SetAppendJobIDResult;
      return $this;
    }

}
