<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class RemovePrintResponse
{

    /**
     * @var boolean $RemovePrintResult
     */
    protected $RemovePrintResult = null;

    /**
     * @param boolean $RemovePrintResult
     */
    public function __construct($RemovePrintResult = null)
    {
      $this->RemovePrintResult = $RemovePrintResult;
    }

    /**
     * @return boolean
     */
    public function getRemovePrintResult()
    {
      return $this->RemovePrintResult;
    }

    /**
     * @param boolean $RemovePrintResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\RemovePrintResponse
     */
    public function setRemovePrintResult($RemovePrintResult)
    {
      $this->RemovePrintResult = $RemovePrintResult;
      return $this;
    }

}
