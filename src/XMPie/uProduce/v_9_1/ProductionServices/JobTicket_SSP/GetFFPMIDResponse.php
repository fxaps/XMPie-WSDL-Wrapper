<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetFFPMIDResponse
{

    /**
     * @var string $GetFFPMIDResult
     */
    protected $GetFFPMIDResult = null;

    /**
     * @param string $GetFFPMIDResult
     */
    public function __construct($GetFFPMIDResult = null)
    {
      $this->GetFFPMIDResult = $GetFFPMIDResult;
    }

    /**
     * @return string
     */
    public function getGetFFPMIDResult()
    {
      return $this->GetFFPMIDResult;
    }

    /**
     * @param string $GetFFPMIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetFFPMIDResponse
     */
    public function setGetFFPMIDResult($GetFFPMIDResult)
    {
      $this->GetFFPMIDResult = $GetFFPMIDResult;
      return $this;
    }

}
