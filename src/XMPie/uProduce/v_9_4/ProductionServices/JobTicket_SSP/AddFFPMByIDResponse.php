<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class AddFFPMByIDResponse
{

    /**
     * @var boolean $AddFFPMByIDResult
     */
    protected $AddFFPMByIDResult = null;

    /**
     * @param boolean $AddFFPMByIDResult
     */
    public function __construct($AddFFPMByIDResult = null)
    {
      $this->AddFFPMByIDResult = $AddFFPMByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddFFPMByIDResult()
    {
      return $this->AddFFPMByIDResult;
    }

    /**
     * @param boolean $AddFFPMByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddFFPMByIDResponse
     */
    public function setAddFFPMByIDResult($AddFFPMByIDResult)
    {
      $this->AddFFPMByIDResult = $AddFFPMByIDResult;
      return $this;
    }

}
