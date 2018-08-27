<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class GetTicketPropertyFromDBResponse
{

    /**
     * @var string $GetTicketPropertyFromDBResult
     */
    protected $GetTicketPropertyFromDBResult = null;

    /**
     * @param string $GetTicketPropertyFromDBResult
     */
    public function __construct($GetTicketPropertyFromDBResult = null)
    {
      $this->GetTicketPropertyFromDBResult = $GetTicketPropertyFromDBResult;
    }

    /**
     * @return string
     */
    public function getGetTicketPropertyFromDBResult()
    {
      return $this->GetTicketPropertyFromDBResult;
    }

    /**
     * @param string $GetTicketPropertyFromDBResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\GetTicketPropertyFromDBResponse
     */
    public function setGetTicketPropertyFromDBResult($GetTicketPropertyFromDBResult)
    {
      $this->GetTicketPropertyFromDBResult = $GetTicketPropertyFromDBResult;
      return $this;
    }

}
