<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class RemoveImpositionParameterResponse
{

    /**
     * @var boolean $RemoveImpositionParameterResult
     */
    protected $RemoveImpositionParameterResult = null;

    /**
     * @param boolean $RemoveImpositionParameterResult
     */
    public function __construct($RemoveImpositionParameterResult = null)
    {
      $this->RemoveImpositionParameterResult = $RemoveImpositionParameterResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveImpositionParameterResult()
    {
      return $this->RemoveImpositionParameterResult;
    }

    /**
     * @param boolean $RemoveImpositionParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\RemoveImpositionParameterResponse
     */
    public function setRemoveImpositionParameterResult($RemoveImpositionParameterResult)
    {
      $this->RemoveImpositionParameterResult = $RemoveImpositionParameterResult;
      return $this;
    }

}
