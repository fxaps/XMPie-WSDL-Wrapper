<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetRIsCountResponse
{

    /**
     * @var int $GetRIsCountResult
     */
    protected $GetRIsCountResult = null;

    /**
     * @param int $GetRIsCountResult
     */
    public function __construct($GetRIsCountResult = null)
    {
      $this->GetRIsCountResult = $GetRIsCountResult;
    }

    /**
     * @return int
     */
    public function getGetRIsCountResult()
    {
      return $this->GetRIsCountResult;
    }

    /**
     * @param int $GetRIsCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetRIsCountResponse
     */
    public function setGetRIsCountResult($GetRIsCountResult)
    {
      $this->GetRIsCountResult = $GetRIsCountResult;
      return $this;
    }

}
