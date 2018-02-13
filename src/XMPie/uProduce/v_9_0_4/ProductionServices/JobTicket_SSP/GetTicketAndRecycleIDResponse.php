<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetTicketAndRecycleIDResponse
{

    /**
     * @var string $GetTicketAndRecycleIDResult
     */
    protected $GetTicketAndRecycleIDResult = null;

    /**
     * @param string $GetTicketAndRecycleIDResult
     */
    public function __construct($GetTicketAndRecycleIDResult = null)
    {
      $this->GetTicketAndRecycleIDResult = $GetTicketAndRecycleIDResult;
    }

    /**
     * @return string
     */
    public function getGetTicketAndRecycleIDResult()
    {
      return $this->GetTicketAndRecycleIDResult;
    }

    /**
     * @param string $GetTicketAndRecycleIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetTicketAndRecycleIDResponse
     */
    public function setGetTicketAndRecycleIDResult($GetTicketAndRecycleIDResult)
    {
      $this->GetTicketAndRecycleIDResult = $GetTicketAndRecycleIDResult;
      return $this;
    }

}
