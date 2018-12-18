<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetImpositionParametersResponse
{

    /**
     * @var boolean $SetImpositionParametersResult
     */
    protected $SetImpositionParametersResult = null;

    /**
     * @param boolean $SetImpositionParametersResult
     */
    public function __construct($SetImpositionParametersResult = null)
    {
      $this->SetImpositionParametersResult = $SetImpositionParametersResult;
    }

    /**
     * @return boolean
     */
    public function getSetImpositionParametersResult()
    {
      return $this->SetImpositionParametersResult;
    }

    /**
     * @param boolean $SetImpositionParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetImpositionParametersResponse
     */
    public function setSetImpositionParametersResult($SetImpositionParametersResult)
    {
      $this->SetImpositionParametersResult = $SetImpositionParametersResult;
      return $this;
    }

}
