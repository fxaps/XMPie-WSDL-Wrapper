<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class CreateNewTicketResponse
{

    /**
     * @var string $CreateNewTicketResult
     */
    protected $CreateNewTicketResult = null;

    /**
     * @param string $CreateNewTicketResult
     */
    public function __construct($CreateNewTicketResult = null)
    {
      $this->CreateNewTicketResult = $CreateNewTicketResult;
    }

    /**
     * @return string
     */
    public function getCreateNewTicketResult()
    {
      return $this->CreateNewTicketResult;
    }

    /**
     * @param string $CreateNewTicketResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\CreateNewTicketResponse
     */
    public function setCreateNewTicketResult($CreateNewTicketResult)
    {
      $this->CreateNewTicketResult = $CreateNewTicketResult;
      return $this;
    }

}
