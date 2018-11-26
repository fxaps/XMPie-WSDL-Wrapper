<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetDefaultRIResponse
{

    /**
     * @var boolean $SetDefaultRIResult
     */
    protected $SetDefaultRIResult = null;

    /**
     * @param boolean $SetDefaultRIResult
     */
    public function __construct($SetDefaultRIResult = null)
    {
      $this->SetDefaultRIResult = $SetDefaultRIResult;
    }

    /**
     * @return boolean
     */
    public function getSetDefaultRIResult()
    {
      return $this->SetDefaultRIResult;
    }

    /**
     * @param boolean $SetDefaultRIResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetDefaultRIResponse
     */
    public function setSetDefaultRIResult($SetDefaultRIResult)
    {
      $this->SetDefaultRIResult = $SetDefaultRIResult;
      return $this;
    }

}
