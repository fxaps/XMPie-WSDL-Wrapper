<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetNthCustomizationResponse
{

    /**
     * @var Customization $GetNthCustomizationResult
     */
    protected $GetNthCustomizationResult = null;

    /**
     * @param Customization $GetNthCustomizationResult
     */
    public function __construct($GetNthCustomizationResult = null)
    {
      $this->GetNthCustomizationResult = $GetNthCustomizationResult;
    }

    /**
     * @return Customization
     */
    public function getGetNthCustomizationResult()
    {
      return $this->GetNthCustomizationResult;
    }

    /**
     * @param Customization $GetNthCustomizationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetNthCustomizationResponse
     */
    public function setGetNthCustomizationResult($GetNthCustomizationResult)
    {
      $this->GetNthCustomizationResult = $GetNthCustomizationResult;
      return $this;
    }

}
