<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP;

class GetTicketResponse
{

    /**
     * @var string $GetTicketResult
     */
    protected $GetTicketResult = null;

    /**
     * @param string $GetTicketResult
     */
    public function __construct($GetTicketResult = null)
    {
      $this->GetTicketResult = $GetTicketResult;
    }

    /**
     * @return string
     */
    public function getGetTicketResult()
    {
      return $this->GetTicketResult;
    }

    /**
     * @param string $GetTicketResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetTicketResponse
     */
    public function setGetTicketResult($GetTicketResult)
    {
      $this->GetTicketResult = $GetTicketResult;
      return $this;
    }

}
