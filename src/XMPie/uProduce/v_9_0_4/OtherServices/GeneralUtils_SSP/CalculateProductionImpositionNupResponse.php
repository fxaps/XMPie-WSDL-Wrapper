<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP;

class CalculateProductionImpositionNupResponse
{

    /**
     * @var NupValues $CalculateProductionImpositionNupResult
     */
    protected $CalculateProductionImpositionNupResult = null;

    /**
     * @param NupValues $CalculateProductionImpositionNupResult
     */
    public function __construct($CalculateProductionImpositionNupResult = null)
    {
      $this->CalculateProductionImpositionNupResult = $CalculateProductionImpositionNupResult;
    }

    /**
     * @return NupValues
     */
    public function getCalculateProductionImpositionNupResult()
    {
      return $this->CalculateProductionImpositionNupResult;
    }

    /**
     * @param NupValues $CalculateProductionImpositionNupResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNupResponse
     */
    public function setCalculateProductionImpositionNupResult($CalculateProductionImpositionNupResult)
    {
      $this->CalculateProductionImpositionNupResult = $CalculateProductionImpositionNupResult;
      return $this;
    }

}
