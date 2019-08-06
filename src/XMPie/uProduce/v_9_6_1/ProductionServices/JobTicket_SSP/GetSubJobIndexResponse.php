<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetSubJobIndexResponse
{

    /**
     * @var int $GetSubJobIndexResult
     */
    protected $GetSubJobIndexResult = null;

    /**
     * @param int $GetSubJobIndexResult
     */
    public function __construct($GetSubJobIndexResult = null)
    {
      $this->GetSubJobIndexResult = $GetSubJobIndexResult;
    }

    /**
     * @return int
     */
    public function getGetSubJobIndexResult()
    {
      return $this->GetSubJobIndexResult;
    }

    /**
     * @param int $GetSubJobIndexResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetSubJobIndexResponse
     */
    public function setGetSubJobIndexResult($GetSubJobIndexResult)
    {
      $this->GetSubJobIndexResult = $GetSubJobIndexResult;
      return $this;
    }

}
