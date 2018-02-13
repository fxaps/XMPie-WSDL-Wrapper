<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class RemoveImpositionParametersResponse
{

    /**
     * @var boolean $RemoveImpositionParametersResult
     */
    protected $RemoveImpositionParametersResult = null;

    /**
     * @param boolean $RemoveImpositionParametersResult
     */
    public function __construct($RemoveImpositionParametersResult = null)
    {
      $this->RemoveImpositionParametersResult = $RemoveImpositionParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveImpositionParametersResult()
    {
      return $this->RemoveImpositionParametersResult;
    }

    /**
     * @param boolean $RemoveImpositionParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\RemoveImpositionParametersResponse
     */
    public function setRemoveImpositionParametersResult($RemoveImpositionParametersResult)
    {
      $this->RemoveImpositionParametersResult = $RemoveImpositionParametersResult;
      return $this;
    }

}
