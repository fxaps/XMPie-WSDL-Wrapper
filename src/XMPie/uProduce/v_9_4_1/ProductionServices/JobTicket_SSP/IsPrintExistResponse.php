<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class IsPrintExistResponse
{

    /**
     * @var boolean $IsPrintExistResult
     */
    protected $IsPrintExistResult = null;

    /**
     * @param boolean $IsPrintExistResult
     */
    public function __construct($IsPrintExistResult = null)
    {
      $this->IsPrintExistResult = $IsPrintExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsPrintExistResult()
    {
      return $this->IsPrintExistResult;
    }

    /**
     * @param boolean $IsPrintExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\IsPrintExistResponse
     */
    public function setIsPrintExistResult($IsPrintExistResult)
    {
      $this->IsPrintExistResult = $IsPrintExistResult;
      return $this;
    }

}
