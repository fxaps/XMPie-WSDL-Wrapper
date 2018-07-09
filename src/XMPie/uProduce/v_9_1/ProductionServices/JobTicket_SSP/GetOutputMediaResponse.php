<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetOutputMediaResponse
{

    /**
     * @var int $GetOutputMediaResult
     */
    protected $GetOutputMediaResult = null;

    /**
     * @param int $GetOutputMediaResult
     */
    public function __construct($GetOutputMediaResult = null)
    {
      $this->GetOutputMediaResult = $GetOutputMediaResult;
    }

    /**
     * @return int
     */
    public function getGetOutputMediaResult()
    {
      return $this->GetOutputMediaResult;
    }

    /**
     * @param int $GetOutputMediaResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetOutputMediaResponse
     */
    public function setGetOutputMediaResult($GetOutputMediaResult)
    {
      $this->GetOutputMediaResult = $GetOutputMediaResult;
      return $this;
    }

}
