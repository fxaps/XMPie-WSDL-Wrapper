<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetTicketDefaultsForPlanResponse
{

    /**
     * @var boolean $SetTicketDefaultsForPlanResult
     */
    protected $SetTicketDefaultsForPlanResult = null;

    /**
     * @param boolean $SetTicketDefaultsForPlanResult
     */
    public function __construct($SetTicketDefaultsForPlanResult = null)
    {
      $this->SetTicketDefaultsForPlanResult = $SetTicketDefaultsForPlanResult;
    }

    /**
     * @return boolean
     */
    public function getSetTicketDefaultsForPlanResult()
    {
      return $this->SetTicketDefaultsForPlanResult;
    }

    /**
     * @param boolean $SetTicketDefaultsForPlanResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetTicketDefaultsForPlanResponse
     */
    public function setSetTicketDefaultsForPlanResult($SetTicketDefaultsForPlanResult)
    {
      $this->SetTicketDefaultsForPlanResult = $SetTicketDefaultsForPlanResult;
      return $this;
    }

}
