<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class SetEmailBodyResponse
{

    /**
     * @var boolean $SetEmailBodyResult
     */
    protected $SetEmailBodyResult = null;

    /**
     * @param boolean $SetEmailBodyResult
     */
    public function __construct($SetEmailBodyResult = null)
    {
      $this->SetEmailBodyResult = $SetEmailBodyResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailBodyResult()
    {
      return $this->SetEmailBodyResult;
    }

    /**
     * @param boolean $SetEmailBodyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetEmailBodyResponse
     */
    public function setSetEmailBodyResult($SetEmailBodyResult)
    {
      $this->SetEmailBodyResult = $SetEmailBodyResult;
      return $this;
    }

}
