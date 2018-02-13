<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetTicketsFromDBResponse
{

    /**
     * @var GetTicketsFromDBResult $GetTicketsFromDBResult
     */
    protected $GetTicketsFromDBResult = null;

    /**
     * @param GetTicketsFromDBResult $GetTicketsFromDBResult
     */
    public function __construct($GetTicketsFromDBResult = null)
    {
      $this->GetTicketsFromDBResult = $GetTicketsFromDBResult;
    }

    /**
     * @return GetTicketsFromDBResult
     */
    public function getGetTicketsFromDBResult()
    {
      return $this->GetTicketsFromDBResult;
    }

    /**
     * @param GetTicketsFromDBResult $GetTicketsFromDBResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetTicketsFromDBResponse
     */
    public function setGetTicketsFromDBResult($GetTicketsFromDBResult)
    {
      $this->GetTicketsFromDBResult = $GetTicketsFromDBResult;
      return $this;
    }

}
