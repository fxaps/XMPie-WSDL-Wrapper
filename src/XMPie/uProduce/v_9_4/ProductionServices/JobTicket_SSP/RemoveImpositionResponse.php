<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class RemoveImpositionResponse
{

    /**
     * @var boolean $RemoveImpositionResult
     */
    protected $RemoveImpositionResult = null;

    /**
     * @param boolean $RemoveImpositionResult
     */
    public function __construct($RemoveImpositionResult = null)
    {
      $this->RemoveImpositionResult = $RemoveImpositionResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveImpositionResult()
    {
      return $this->RemoveImpositionResult;
    }

    /**
     * @param boolean $RemoveImpositionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\RemoveImpositionResponse
     */
    public function setRemoveImpositionResult($RemoveImpositionResult)
    {
      $this->RemoveImpositionResult = $RemoveImpositionResult;
      return $this;
    }

}
