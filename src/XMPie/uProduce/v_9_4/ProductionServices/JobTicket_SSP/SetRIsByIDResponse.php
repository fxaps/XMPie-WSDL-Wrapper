<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetRIsByIDResponse
{

    /**
     * @var boolean $SetRIsByIDResult
     */
    protected $SetRIsByIDResult = null;

    /**
     * @param boolean $SetRIsByIDResult
     */
    public function __construct($SetRIsByIDResult = null)
    {
      $this->SetRIsByIDResult = $SetRIsByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetRIsByIDResult()
    {
      return $this->SetRIsByIDResult;
    }

    /**
     * @param boolean $SetRIsByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetRIsByIDResponse
     */
    public function setSetRIsByIDResult($SetRIsByIDResult)
    {
      $this->SetRIsByIDResult = $SetRIsByIDResult;
      return $this;
    }

}
