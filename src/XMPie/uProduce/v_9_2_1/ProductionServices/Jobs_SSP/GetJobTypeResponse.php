<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP;

class GetJobTypeResponse
{

    /**
     * @var GetJobTypeResult $GetJobTypeResult
     */
    protected $GetJobTypeResult = null;

    /**
     * @param GetJobTypeResult $GetJobTypeResult
     */
    public function __construct($GetJobTypeResult = null)
    {
      $this->GetJobTypeResult = $GetJobTypeResult;
    }

    /**
     * @return GetJobTypeResult
     */
    public function getGetJobTypeResult()
    {
      return $this->GetJobTypeResult;
    }

    /**
     * @param GetJobTypeResult $GetJobTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP\GetJobTypeResponse
     */
    public function setGetJobTypeResult($GetJobTypeResult)
    {
      $this->GetJobTypeResult = $GetJobTypeResult;
      return $this;
    }

}
