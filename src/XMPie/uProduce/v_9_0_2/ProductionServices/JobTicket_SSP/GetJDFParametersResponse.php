<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetJDFParametersResponse
{

    /**
     * @var ArrayOfParameter $GetJDFParametersResult
     */
    protected $GetJDFParametersResult = null;

    /**
     * @param ArrayOfParameter $GetJDFParametersResult
     */
    public function __construct($GetJDFParametersResult = null)
    {
      $this->GetJDFParametersResult = $GetJDFParametersResult;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getGetJDFParametersResult()
    {
      return $this->GetJDFParametersResult;
    }

    /**
     * @param ArrayOfParameter $GetJDFParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetJDFParametersResponse
     */
    public function setGetJDFParametersResult($GetJDFParametersResult)
    {
      $this->GetJDFParametersResult = $GetJDFParametersResult;
      return $this;
    }

}
