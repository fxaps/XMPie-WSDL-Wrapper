<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class LoadJobTicketResponse
{

    /**
     * @var string $LoadJobTicketResult
     */
    protected $LoadJobTicketResult = null;

    /**
     * @param string $LoadJobTicketResult
     */
    public function __construct($LoadJobTicketResult = null)
    {
      $this->LoadJobTicketResult = $LoadJobTicketResult;
    }

    /**
     * @return string
     */
    public function getLoadJobTicketResult()
    {
      return $this->LoadJobTicketResult;
    }

    /**
     * @param string $LoadJobTicketResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\LoadJobTicketResponse
     */
    public function setLoadJobTicketResult($LoadJobTicketResult)
    {
      $this->LoadJobTicketResult = $LoadJobTicketResult;
      return $this;
    }

}
