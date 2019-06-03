<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetOutputFileNameResponse
{

    /**
     * @var string $GetOutputFileNameResult
     */
    protected $GetOutputFileNameResult = null;

    /**
     * @param string $GetOutputFileNameResult
     */
    public function __construct($GetOutputFileNameResult = null)
    {
      $this->GetOutputFileNameResult = $GetOutputFileNameResult;
    }

    /**
     * @return string
     */
    public function getGetOutputFileNameResult()
    {
      return $this->GetOutputFileNameResult;
    }

    /**
     * @param string $GetOutputFileNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetOutputFileNameResponse
     */
    public function setGetOutputFileNameResult($GetOutputFileNameResult)
    {
      $this->GetOutputFileNameResult = $GetOutputFileNameResult;
      return $this;
    }

}
