<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class RecycleTicketIDResponse
{

    /**
     * @var boolean $RecycleTicketIDResult
     */
    protected $RecycleTicketIDResult = null;

    /**
     * @param boolean $RecycleTicketIDResult
     */
    public function __construct($RecycleTicketIDResult = null)
    {
      $this->RecycleTicketIDResult = $RecycleTicketIDResult;
    }

    /**
     * @return boolean
     */
    public function getRecycleTicketIDResult()
    {
      return $this->RecycleTicketIDResult;
    }

    /**
     * @param boolean $RecycleTicketIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\RecycleTicketIDResponse
     */
    public function setRecycleTicketIDResult($RecycleTicketIDResult)
    {
      $this->RecycleTicketIDResult = $RecycleTicketIDResult;
      return $this;
    }

}
