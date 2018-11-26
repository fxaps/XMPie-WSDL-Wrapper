<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class LoadTicketFromDBResponse
{

    /**
     * @var string $LoadTicketFromDBResult
     */
    protected $LoadTicketFromDBResult = null;

    /**
     * @param string $LoadTicketFromDBResult
     */
    public function __construct($LoadTicketFromDBResult = null)
    {
      $this->LoadTicketFromDBResult = $LoadTicketFromDBResult;
    }

    /**
     * @return string
     */
    public function getLoadTicketFromDBResult()
    {
      return $this->LoadTicketFromDBResult;
    }

    /**
     * @param string $LoadTicketFromDBResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\LoadTicketFromDBResponse
     */
    public function setLoadTicketFromDBResult($LoadTicketFromDBResult)
    {
      $this->LoadTicketFromDBResult = $LoadTicketFromDBResult;
      return $this;
    }

}
