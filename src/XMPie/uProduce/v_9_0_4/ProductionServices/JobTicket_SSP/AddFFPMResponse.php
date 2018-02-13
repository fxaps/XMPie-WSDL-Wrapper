<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class AddFFPMResponse
{

    /**
     * @var boolean $AddFFPMResult
     */
    protected $AddFFPMResult = null;

    /**
     * @param boolean $AddFFPMResult
     */
    public function __construct($AddFFPMResult = null)
    {
      $this->AddFFPMResult = $AddFFPMResult;
    }

    /**
     * @return boolean
     */
    public function getAddFFPMResult()
    {
      return $this->AddFFPMResult;
    }

    /**
     * @param boolean $AddFFPMResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\AddFFPMResponse
     */
    public function setAddFFPMResult($AddFFPMResult)
    {
      $this->AddFFPMResult = $AddFFPMResult;
      return $this;
    }

}
