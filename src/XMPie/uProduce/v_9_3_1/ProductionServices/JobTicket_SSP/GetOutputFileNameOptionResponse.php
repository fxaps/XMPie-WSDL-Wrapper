<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetOutputFileNameOptionResponse
{

    /**
     * @var int $GetOutputFileNameOptionResult
     */
    protected $GetOutputFileNameOptionResult = null;

    /**
     * @param int $GetOutputFileNameOptionResult
     */
    public function __construct($GetOutputFileNameOptionResult = null)
    {
      $this->GetOutputFileNameOptionResult = $GetOutputFileNameOptionResult;
    }

    /**
     * @return int
     */
    public function getGetOutputFileNameOptionResult()
    {
      return $this->GetOutputFileNameOptionResult;
    }

    /**
     * @param int $GetOutputFileNameOptionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetOutputFileNameOptionResponse
     */
    public function setGetOutputFileNameOptionResult($GetOutputFileNameOptionResult)
    {
      $this->GetOutputFileNameOptionResult = $GetOutputFileNameOptionResult;
      return $this;
    }

}
