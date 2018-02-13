<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetJobParametersResponse
{

    /**
     * @var ArrayOfParameter $GetJobParametersResult
     */
    protected $GetJobParametersResult = null;

    /**
     * @param ArrayOfParameter $GetJobParametersResult
     */
    public function __construct($GetJobParametersResult = null)
    {
      $this->GetJobParametersResult = $GetJobParametersResult;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getGetJobParametersResult()
    {
      return $this->GetJobParametersResult;
    }

    /**
     * @param ArrayOfParameter $GetJobParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetJobParametersResponse
     */
    public function setGetJobParametersResult($GetJobParametersResult)
    {
      $this->GetJobParametersResult = $GetJobParametersResult;
      return $this;
    }

}
