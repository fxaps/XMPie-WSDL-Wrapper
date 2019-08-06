<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP;

class ClearGlobalPrintCacheResponse
{

    /**
     * @var boolean $ClearGlobalPrintCacheResult
     */
    protected $ClearGlobalPrintCacheResult = null;

    /**
     * @param boolean $ClearGlobalPrintCacheResult
     */
    public function __construct($ClearGlobalPrintCacheResult = null)
    {
      $this->ClearGlobalPrintCacheResult = $ClearGlobalPrintCacheResult;
    }

    /**
     * @return boolean
     */
    public function getClearGlobalPrintCacheResult()
    {
      return $this->ClearGlobalPrintCacheResult;
    }

    /**
     * @param boolean $ClearGlobalPrintCacheResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP\ClearGlobalPrintCacheResponse
     */
    public function setClearGlobalPrintCacheResult($ClearGlobalPrintCacheResult)
    {
      $this->ClearGlobalPrintCacheResult = $ClearGlobalPrintCacheResult;
      return $this;
    }

}
