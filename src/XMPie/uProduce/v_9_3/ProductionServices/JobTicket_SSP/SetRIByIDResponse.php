<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetRIByIDResponse
{

    /**
     * @var boolean $SetRIByIDResult
     */
    protected $SetRIByIDResult = null;

    /**
     * @param boolean $SetRIByIDResult
     */
    public function __construct($SetRIByIDResult = null)
    {
      $this->SetRIByIDResult = $SetRIByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetRIByIDResult()
    {
      return $this->SetRIByIDResult;
    }

    /**
     * @param boolean $SetRIByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIByIDResponse
     */
    public function setSetRIByIDResult($SetRIByIDResult)
    {
      $this->SetRIByIDResult = $SetRIByIDResult;
      return $this;
    }

}
