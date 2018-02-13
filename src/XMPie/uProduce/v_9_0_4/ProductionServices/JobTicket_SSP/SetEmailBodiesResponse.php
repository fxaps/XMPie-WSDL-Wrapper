<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class SetEmailBodiesResponse
{

    /**
     * @var boolean $SetEmailBodiesResult
     */
    protected $SetEmailBodiesResult = null;

    /**
     * @param boolean $SetEmailBodiesResult
     */
    public function __construct($SetEmailBodiesResult = null)
    {
      $this->SetEmailBodiesResult = $SetEmailBodiesResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailBodiesResult()
    {
      return $this->SetEmailBodiesResult;
    }

    /**
     * @param boolean $SetEmailBodiesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetEmailBodiesResponse
     */
    public function setSetEmailBodiesResult($SetEmailBodiesResult)
    {
      $this->SetEmailBodiesResult = $SetEmailBodiesResult;
      return $this;
    }

}
