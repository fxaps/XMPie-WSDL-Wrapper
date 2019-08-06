<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class RemoveCustomizationResponse
{

    /**
     * @var boolean $RemoveCustomizationResult
     */
    protected $RemoveCustomizationResult = null;

    /**
     * @param boolean $RemoveCustomizationResult
     */
    public function __construct($RemoveCustomizationResult = null)
    {
      $this->RemoveCustomizationResult = $RemoveCustomizationResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveCustomizationResult()
    {
      return $this->RemoveCustomizationResult;
    }

    /**
     * @param boolean $RemoveCustomizationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\RemoveCustomizationResponse
     */
    public function setRemoveCustomizationResult($RemoveCustomizationResult)
    {
      $this->RemoveCustomizationResult = $RemoveCustomizationResult;
      return $this;
    }

}
