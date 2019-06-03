<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SaveNewTicketToDBResponse
{

    /**
     * @var string $SaveNewTicketToDBResult
     */
    protected $SaveNewTicketToDBResult = null;

    /**
     * @param string $SaveNewTicketToDBResult
     */
    public function __construct($SaveNewTicketToDBResult = null)
    {
      $this->SaveNewTicketToDBResult = $SaveNewTicketToDBResult;
    }

    /**
     * @return string
     */
    public function getSaveNewTicketToDBResult()
    {
      return $this->SaveNewTicketToDBResult;
    }

    /**
     * @param string $SaveNewTicketToDBResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SaveNewTicketToDBResponse
     */
    public function setSaveNewTicketToDBResult($SaveNewTicketToDBResult)
    {
      $this->SaveNewTicketToDBResult = $SaveNewTicketToDBResult;
      return $this;
    }

}
