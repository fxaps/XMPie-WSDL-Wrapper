<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetOutputParametersResponse
{

    /**
     * @var ArrayOfParameter $GetOutputParametersResult
     */
    protected $GetOutputParametersResult = null;

    /**
     * @param ArrayOfParameter $GetOutputParametersResult
     */
    public function __construct($GetOutputParametersResult = null)
    {
      $this->GetOutputParametersResult = $GetOutputParametersResult;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getGetOutputParametersResult()
    {
      return $this->GetOutputParametersResult;
    }

    /**
     * @param ArrayOfParameter $GetOutputParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetOutputParametersResponse
     */
    public function setGetOutputParametersResult($GetOutputParametersResult)
    {
      $this->GetOutputParametersResult = $GetOutputParametersResult;
      return $this;
    }

}
