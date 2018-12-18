<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class LoadLastJobTicketOfPlanResponse
{

    /**
     * @var string $LoadLastJobTicketOfPlanResult
     */
    protected $LoadLastJobTicketOfPlanResult = null;

    /**
     * @param string $LoadLastJobTicketOfPlanResult
     */
    public function __construct($LoadLastJobTicketOfPlanResult = null)
    {
      $this->LoadLastJobTicketOfPlanResult = $LoadLastJobTicketOfPlanResult;
    }

    /**
     * @return string
     */
    public function getLoadLastJobTicketOfPlanResult()
    {
      return $this->LoadLastJobTicketOfPlanResult;
    }

    /**
     * @param string $LoadLastJobTicketOfPlanResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\LoadLastJobTicketOfPlanResponse
     */
    public function setLoadLastJobTicketOfPlanResult($LoadLastJobTicketOfPlanResult)
    {
      $this->LoadLastJobTicketOfPlanResult = $LoadLastJobTicketOfPlanResult;
      return $this;
    }

}
