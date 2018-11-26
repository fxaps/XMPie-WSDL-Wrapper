<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetRIFromResponse
{

    /**
     * @var int $GetRIFromResult
     */
    protected $GetRIFromResult = null;

    /**
     * @param int $GetRIFromResult
     */
    public function __construct($GetRIFromResult = null)
    {
      $this->GetRIFromResult = $GetRIFromResult;
    }

    /**
     * @return int
     */
    public function getGetRIFromResult()
    {
      return $this->GetRIFromResult;
    }

    /**
     * @param int $GetRIFromResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetRIFromResponse
     */
    public function setGetRIFromResult($GetRIFromResult)
    {
      $this->GetRIFromResult = $GetRIFromResult;
      return $this;
    }

}
