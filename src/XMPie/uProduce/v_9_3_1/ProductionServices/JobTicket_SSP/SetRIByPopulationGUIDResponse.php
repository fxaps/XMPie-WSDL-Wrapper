<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetRIByPopulationGUIDResponse
{

    /**
     * @var boolean $SetRIByPopulationGUIDResult
     */
    protected $SetRIByPopulationGUIDResult = null;

    /**
     * @param boolean $SetRIByPopulationGUIDResult
     */
    public function __construct($SetRIByPopulationGUIDResult = null)
    {
      $this->SetRIByPopulationGUIDResult = $SetRIByPopulationGUIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetRIByPopulationGUIDResult()
    {
      return $this->SetRIByPopulationGUIDResult;
    }

    /**
     * @param boolean $SetRIByPopulationGUIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetRIByPopulationGUIDResponse
     */
    public function setSetRIByPopulationGUIDResult($SetRIByPopulationGUIDResult)
    {
      $this->SetRIByPopulationGUIDResult = $SetRIByPopulationGUIDResult;
      return $this;
    }

}
