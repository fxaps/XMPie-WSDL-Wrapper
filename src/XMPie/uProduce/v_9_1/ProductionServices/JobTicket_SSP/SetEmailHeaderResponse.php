<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class SetEmailHeaderResponse
{

    /**
     * @var boolean $SetEmailHeaderResult
     */
    protected $SetEmailHeaderResult = null;

    /**
     * @param boolean $SetEmailHeaderResult
     */
    public function __construct($SetEmailHeaderResult = null)
    {
      $this->SetEmailHeaderResult = $SetEmailHeaderResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailHeaderResult()
    {
      return $this->SetEmailHeaderResult;
    }

    /**
     * @param boolean $SetEmailHeaderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetEmailHeaderResponse
     */
    public function setSetEmailHeaderResult($SetEmailHeaderResult)
    {
      $this->SetEmailHeaderResult = $SetEmailHeaderResult;
      return $this;
    }

}
