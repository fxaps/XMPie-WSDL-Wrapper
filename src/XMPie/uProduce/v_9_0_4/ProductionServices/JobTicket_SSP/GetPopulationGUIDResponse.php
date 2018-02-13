<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetPopulationGUIDResponse
{

    /**
     * @var string $GetPopulationGUIDResult
     */
    protected $GetPopulationGUIDResult = null;

    /**
     * @param string $GetPopulationGUIDResult
     */
    public function __construct($GetPopulationGUIDResult = null)
    {
      $this->GetPopulationGUIDResult = $GetPopulationGUIDResult;
    }

    /**
     * @return string
     */
    public function getGetPopulationGUIDResult()
    {
      return $this->GetPopulationGUIDResult;
    }

    /**
     * @param string $GetPopulationGUIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetPopulationGUIDResponse
     */
    public function setGetPopulationGUIDResult($GetPopulationGUIDResult)
    {
      $this->GetPopulationGUIDResult = $GetPopulationGUIDResult;
      return $this;
    }

}
