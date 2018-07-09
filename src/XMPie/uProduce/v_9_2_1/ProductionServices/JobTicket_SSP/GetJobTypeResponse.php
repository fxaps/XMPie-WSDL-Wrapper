<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetJobTypeResponse
{

    /**
     * @var string $GetJobTypeResult
     */
    protected $GetJobTypeResult = null;

    /**
     * @param string $GetJobTypeResult
     */
    public function __construct($GetJobTypeResult = null)
    {
      $this->GetJobTypeResult = $GetJobTypeResult;
    }

    /**
     * @return string
     */
    public function getGetJobTypeResult()
    {
      return $this->GetJobTypeResult;
    }

    /**
     * @param string $GetJobTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetJobTypeResponse
     */
    public function setGetJobTypeResult($GetJobTypeResult)
    {
      $this->GetJobTypeResult = $GetJobTypeResult;
      return $this;
    }

}
