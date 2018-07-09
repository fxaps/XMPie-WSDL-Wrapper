<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetImpositionParameterResponse
{

    /**
     * @var Parameter $GetImpositionParameterResult
     */
    protected $GetImpositionParameterResult = null;

    /**
     * @param Parameter $GetImpositionParameterResult
     */
    public function __construct($GetImpositionParameterResult = null)
    {
      $this->GetImpositionParameterResult = $GetImpositionParameterResult;
    }

    /**
     * @return Parameter
     */
    public function getGetImpositionParameterResult()
    {
      return $this->GetImpositionParameterResult;
    }

    /**
     * @param Parameter $GetImpositionParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetImpositionParameterResponse
     */
    public function setGetImpositionParameterResult($GetImpositionParameterResult)
    {
      $this->GetImpositionParameterResult = $GetImpositionParameterResult;
      return $this;
    }

}
