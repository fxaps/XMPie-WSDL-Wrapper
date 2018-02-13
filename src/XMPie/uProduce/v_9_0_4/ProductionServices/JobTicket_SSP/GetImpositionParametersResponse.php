<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetImpositionParametersResponse
{

    /**
     * @var ArrayOfParameter $GetImpositionParametersResult
     */
    protected $GetImpositionParametersResult = null;

    /**
     * @param ArrayOfParameter $GetImpositionParametersResult
     */
    public function __construct($GetImpositionParametersResult = null)
    {
      $this->GetImpositionParametersResult = $GetImpositionParametersResult;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getGetImpositionParametersResult()
    {
      return $this->GetImpositionParametersResult;
    }

    /**
     * @param ArrayOfParameter $GetImpositionParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetImpositionParametersResponse
     */
    public function setGetImpositionParametersResult($GetImpositionParametersResult)
    {
      $this->GetImpositionParametersResult = $GetImpositionParametersResult;
      return $this;
    }

}
