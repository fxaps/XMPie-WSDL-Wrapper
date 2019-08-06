<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetJobParameterResponse
{

    /**
     * @var Parameter $GetJobParameterResult
     */
    protected $GetJobParameterResult = null;

    /**
     * @param Parameter $GetJobParameterResult
     */
    public function __construct($GetJobParameterResult = null)
    {
      $this->GetJobParameterResult = $GetJobParameterResult;
    }

    /**
     * @return Parameter
     */
    public function getGetJobParameterResult()
    {
      return $this->GetJobParameterResult;
    }

    /**
     * @param Parameter $GetJobParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetJobParameterResponse
     */
    public function setGetJobParameterResult($GetJobParameterResult)
    {
      $this->GetJobParameterResult = $GetJobParameterResult;
      return $this;
    }

}
