<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class AddImpositionResponse
{

    /**
     * @var boolean $AddImpositionResult
     */
    protected $AddImpositionResult = null;

    /**
     * @param boolean $AddImpositionResult
     */
    public function __construct($AddImpositionResult = null)
    {
      $this->AddImpositionResult = $AddImpositionResult;
    }

    /**
     * @return boolean
     */
    public function getAddImpositionResult()
    {
      return $this->AddImpositionResult;
    }

    /**
     * @param boolean $AddImpositionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\AddImpositionResponse
     */
    public function setAddImpositionResult($AddImpositionResult)
    {
      $this->AddImpositionResult = $AddImpositionResult;
      return $this;
    }

}
