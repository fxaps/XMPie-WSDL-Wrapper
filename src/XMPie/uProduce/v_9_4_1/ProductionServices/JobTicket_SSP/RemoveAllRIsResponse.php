<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class RemoveAllRIsResponse
{

    /**
     * @var boolean $RemoveAllRIsResult
     */
    protected $RemoveAllRIsResult = null;

    /**
     * @param boolean $RemoveAllRIsResult
     */
    public function __construct($RemoveAllRIsResult = null)
    {
      $this->RemoveAllRIsResult = $RemoveAllRIsResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllRIsResult()
    {
      return $this->RemoveAllRIsResult;
    }

    /**
     * @param boolean $RemoveAllRIsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\RemoveAllRIsResponse
     */
    public function setRemoveAllRIsResult($RemoveAllRIsResult)
    {
      $this->RemoveAllRIsResult = $RemoveAllRIsResult;
      return $this;
    }

}
