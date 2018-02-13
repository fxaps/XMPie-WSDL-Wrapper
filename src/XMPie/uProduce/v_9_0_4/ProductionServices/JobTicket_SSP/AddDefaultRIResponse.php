<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class AddDefaultRIResponse
{

    /**
     * @var boolean $AddDefaultRIResult
     */
    protected $AddDefaultRIResult = null;

    /**
     * @param boolean $AddDefaultRIResult
     */
    public function __construct($AddDefaultRIResult = null)
    {
      $this->AddDefaultRIResult = $AddDefaultRIResult;
    }

    /**
     * @return boolean
     */
    public function getAddDefaultRIResult()
    {
      return $this->AddDefaultRIResult;
    }

    /**
     * @param boolean $AddDefaultRIResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\AddDefaultRIResponse
     */
    public function setAddDefaultRIResult($AddDefaultRIResult)
    {
      $this->AddDefaultRIResult = $AddDefaultRIResult;
      return $this;
    }

}
