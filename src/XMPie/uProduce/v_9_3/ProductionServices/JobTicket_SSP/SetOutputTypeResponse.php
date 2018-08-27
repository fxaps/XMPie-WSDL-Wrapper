<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetOutputTypeResponse
{

    /**
     * @var boolean $SetOutputTypeResult
     */
    protected $SetOutputTypeResult = null;

    /**
     * @param boolean $SetOutputTypeResult
     */
    public function __construct($SetOutputTypeResult = null)
    {
      $this->SetOutputTypeResult = $SetOutputTypeResult;
    }

    /**
     * @return boolean
     */
    public function getSetOutputTypeResult()
    {
      return $this->SetOutputTypeResult;
    }

    /**
     * @param boolean $SetOutputTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetOutputTypeResponse
     */
    public function setSetOutputTypeResult($SetOutputTypeResult)
    {
      $this->SetOutputTypeResult = $SetOutputTypeResult;
      return $this;
    }

}
