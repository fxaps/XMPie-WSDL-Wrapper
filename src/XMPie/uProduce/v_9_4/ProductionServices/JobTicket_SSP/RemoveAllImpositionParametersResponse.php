<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class RemoveAllImpositionParametersResponse
{

    /**
     * @var boolean $RemoveAllImpositionParametersResult
     */
    protected $RemoveAllImpositionParametersResult = null;

    /**
     * @param boolean $RemoveAllImpositionParametersResult
     */
    public function __construct($RemoveAllImpositionParametersResult = null)
    {
      $this->RemoveAllImpositionParametersResult = $RemoveAllImpositionParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllImpositionParametersResult()
    {
      return $this->RemoveAllImpositionParametersResult;
    }

    /**
     * @param boolean $RemoveAllImpositionParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\RemoveAllImpositionParametersResponse
     */
    public function setRemoveAllImpositionParametersResult($RemoveAllImpositionParametersResult)
    {
      $this->RemoveAllImpositionParametersResult = $RemoveAllImpositionParametersResult;
      return $this;
    }

}
