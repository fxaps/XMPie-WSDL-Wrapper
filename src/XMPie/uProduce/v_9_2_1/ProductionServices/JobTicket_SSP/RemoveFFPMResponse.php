<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class RemoveFFPMResponse
{

    /**
     * @var boolean $RemoveFFPMResult
     */
    protected $RemoveFFPMResult = null;

    /**
     * @param boolean $RemoveFFPMResult
     */
    public function __construct($RemoveFFPMResult = null)
    {
      $this->RemoveFFPMResult = $RemoveFFPMResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveFFPMResult()
    {
      return $this->RemoveFFPMResult;
    }

    /**
     * @param boolean $RemoveFFPMResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\RemoveFFPMResponse
     */
    public function setRemoveFFPMResult($RemoveFFPMResult)
    {
      $this->RemoveFFPMResult = $RemoveFFPMResult;
      return $this;
    }

}
