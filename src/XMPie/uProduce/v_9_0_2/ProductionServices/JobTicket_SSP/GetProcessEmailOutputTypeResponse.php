<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetProcessEmailOutputTypeResponse
{

    /**
     * @var string $GetProcessEmailOutputTypeResult
     */
    protected $GetProcessEmailOutputTypeResult = null;

    /**
     * @param string $GetProcessEmailOutputTypeResult
     */
    public function __construct($GetProcessEmailOutputTypeResult = null)
    {
      $this->GetProcessEmailOutputTypeResult = $GetProcessEmailOutputTypeResult;
    }

    /**
     * @return string
     */
    public function getGetProcessEmailOutputTypeResult()
    {
      return $this->GetProcessEmailOutputTypeResult;
    }

    /**
     * @param string $GetProcessEmailOutputTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetProcessEmailOutputTypeResponse
     */
    public function setGetProcessEmailOutputTypeResult($GetProcessEmailOutputTypeResult)
    {
      $this->GetProcessEmailOutputTypeResult = $GetProcessEmailOutputTypeResult;
      return $this;
    }

}
