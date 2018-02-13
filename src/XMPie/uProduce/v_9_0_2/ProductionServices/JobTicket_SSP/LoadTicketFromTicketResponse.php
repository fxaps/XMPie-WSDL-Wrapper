<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class LoadTicketFromTicketResponse
{

    /**
     * @var string $LoadTicketFromTicketResult
     */
    protected $LoadTicketFromTicketResult = null;

    /**
     * @param string $LoadTicketFromTicketResult
     */
    public function __construct($LoadTicketFromTicketResult = null)
    {
      $this->LoadTicketFromTicketResult = $LoadTicketFromTicketResult;
    }

    /**
     * @return string
     */
    public function getLoadTicketFromTicketResult()
    {
      return $this->LoadTicketFromTicketResult;
    }

    /**
     * @param string $LoadTicketFromTicketResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\LoadTicketFromTicketResponse
     */
    public function setLoadTicketFromTicketResult($LoadTicketFromTicketResult)
    {
      $this->LoadTicketFromTicketResult = $LoadTicketFromTicketResult;
      return $this;
    }

}
