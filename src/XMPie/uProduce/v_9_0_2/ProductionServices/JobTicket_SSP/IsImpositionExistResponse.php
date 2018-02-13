<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class IsImpositionExistResponse
{

    /**
     * @var boolean $IsImpositionExistResult
     */
    protected $IsImpositionExistResult = null;

    /**
     * @param boolean $IsImpositionExistResult
     */
    public function __construct($IsImpositionExistResult = null)
    {
      $this->IsImpositionExistResult = $IsImpositionExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsImpositionExistResult()
    {
      return $this->IsImpositionExistResult;
    }

    /**
     * @param boolean $IsImpositionExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\IsImpositionExistResponse
     */
    public function setIsImpositionExistResult($IsImpositionExistResult)
    {
      $this->IsImpositionExistResult = $IsImpositionExistResult;
      return $this;
    }

}
