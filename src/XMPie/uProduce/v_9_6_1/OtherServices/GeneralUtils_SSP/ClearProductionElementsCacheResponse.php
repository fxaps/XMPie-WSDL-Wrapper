<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP;

class ClearProductionElementsCacheResponse
{

    /**
     * @var boolean $ClearProductionElementsCacheResult
     */
    protected $ClearProductionElementsCacheResult = null;

    /**
     * @param boolean $ClearProductionElementsCacheResult
     */
    public function __construct($ClearProductionElementsCacheResult = null)
    {
      $this->ClearProductionElementsCacheResult = $ClearProductionElementsCacheResult;
    }

    /**
     * @return boolean
     */
    public function getClearProductionElementsCacheResult()
    {
      return $this->ClearProductionElementsCacheResult;
    }

    /**
     * @param boolean $ClearProductionElementsCacheResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP\ClearProductionElementsCacheResponse
     */
    public function setClearProductionElementsCacheResult($ClearProductionElementsCacheResult)
    {
      $this->ClearProductionElementsCacheResult = $ClearProductionElementsCacheResult;
      return $this;
    }

}
