<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class AddRIByIDResponse
{

    /**
     * @var boolean $AddRIByIDResult
     */
    protected $AddRIByIDResult = null;

    /**
     * @param boolean $AddRIByIDResult
     */
    public function __construct($AddRIByIDResult = null)
    {
      $this->AddRIByIDResult = $AddRIByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddRIByIDResult()
    {
      return $this->AddRIByIDResult;
    }

    /**
     * @param boolean $AddRIByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddRIByIDResponse
     */
    public function setAddRIByIDResult($AddRIByIDResult)
    {
      $this->AddRIByIDResult = $AddRIByIDResult;
      return $this;
    }

}
