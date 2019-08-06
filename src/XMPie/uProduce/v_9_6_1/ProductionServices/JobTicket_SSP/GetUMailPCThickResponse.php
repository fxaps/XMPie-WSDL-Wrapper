<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetUMailPCThickResponse
{

    /**
     * @var string $GetUMailPCThickResult
     */
    protected $GetUMailPCThickResult = null;

    /**
     * @param string $GetUMailPCThickResult
     */
    public function __construct($GetUMailPCThickResult = null)
    {
      $this->GetUMailPCThickResult = $GetUMailPCThickResult;
    }

    /**
     * @return string
     */
    public function getGetUMailPCThickResult()
    {
      return $this->GetUMailPCThickResult;
    }

    /**
     * @param string $GetUMailPCThickResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetUMailPCThickResponse
     */
    public function setGetUMailPCThickResult($GetUMailPCThickResult)
    {
      $this->GetUMailPCThickResult = $GetUMailPCThickResult;
      return $this;
    }

}
