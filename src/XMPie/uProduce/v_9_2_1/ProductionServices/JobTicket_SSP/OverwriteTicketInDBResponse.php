<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class OverwriteTicketInDBResponse
{

    /**
     * @var boolean $OverwriteTicketInDBResult
     */
    protected $OverwriteTicketInDBResult = null;

    /**
     * @param boolean $OverwriteTicketInDBResult
     */
    public function __construct($OverwriteTicketInDBResult = null)
    {
      $this->OverwriteTicketInDBResult = $OverwriteTicketInDBResult;
    }

    /**
     * @return boolean
     */
    public function getOverwriteTicketInDBResult()
    {
      return $this->OverwriteTicketInDBResult;
    }

    /**
     * @param boolean $OverwriteTicketInDBResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\OverwriteTicketInDBResponse
     */
    public function setOverwriteTicketInDBResult($OverwriteTicketInDBResult)
    {
      $this->OverwriteTicketInDBResult = $OverwriteTicketInDBResult;
      return $this;
    }

}
