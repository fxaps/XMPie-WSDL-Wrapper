<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetImpositionParameterResponse
{

    /**
     * @var boolean $SetImpositionParameterResult
     */
    protected $SetImpositionParameterResult = null;

    /**
     * @param boolean $SetImpositionParameterResult
     */
    public function __construct($SetImpositionParameterResult = null)
    {
      $this->SetImpositionParameterResult = $SetImpositionParameterResult;
    }

    /**
     * @return boolean
     */
    public function getSetImpositionParameterResult()
    {
      return $this->SetImpositionParameterResult;
    }

    /**
     * @param boolean $SetImpositionParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetImpositionParameterResponse
     */
    public function setSetImpositionParameterResult($SetImpositionParameterResult)
    {
      $this->SetImpositionParameterResult = $SetImpositionParameterResult;
      return $this;
    }

}
