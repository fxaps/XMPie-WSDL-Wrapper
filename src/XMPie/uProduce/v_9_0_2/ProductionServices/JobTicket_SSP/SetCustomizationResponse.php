<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class SetCustomizationResponse
{

    /**
     * @var boolean $SetCustomizationResult
     */
    protected $SetCustomizationResult = null;

    /**
     * @param boolean $SetCustomizationResult
     */
    public function __construct($SetCustomizationResult = null)
    {
      $this->SetCustomizationResult = $SetCustomizationResult;
    }

    /**
     * @return boolean
     */
    public function getSetCustomizationResult()
    {
      return $this->SetCustomizationResult;
    }

    /**
     * @param boolean $SetCustomizationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetCustomizationResponse
     */
    public function setSetCustomizationResult($SetCustomizationResult)
    {
      $this->SetCustomizationResult = $SetCustomizationResult;
      return $this;
    }

}
