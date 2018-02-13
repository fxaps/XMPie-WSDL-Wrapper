<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetEnvJobNameResponse
{

    /**
     * @var string $GetEnvJobNameResult
     */
    protected $GetEnvJobNameResult = null;

    /**
     * @param string $GetEnvJobNameResult
     */
    public function __construct($GetEnvJobNameResult = null)
    {
      $this->GetEnvJobNameResult = $GetEnvJobNameResult;
    }

    /**
     * @return string
     */
    public function getGetEnvJobNameResult()
    {
      return $this->GetEnvJobNameResult;
    }

    /**
     * @param string $GetEnvJobNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetEnvJobNameResponse
     */
    public function setGetEnvJobNameResult($GetEnvJobNameResult)
    {
      $this->GetEnvJobNameResult = $GetEnvJobNameResult;
      return $this;
    }

}
