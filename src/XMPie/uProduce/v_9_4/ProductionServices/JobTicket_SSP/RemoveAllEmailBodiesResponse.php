<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class RemoveAllEmailBodiesResponse
{

    /**
     * @var boolean $RemoveAllEmailBodiesResult
     */
    protected $RemoveAllEmailBodiesResult = null;

    /**
     * @param boolean $RemoveAllEmailBodiesResult
     */
    public function __construct($RemoveAllEmailBodiesResult = null)
    {
      $this->RemoveAllEmailBodiesResult = $RemoveAllEmailBodiesResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllEmailBodiesResult()
    {
      return $this->RemoveAllEmailBodiesResult;
    }

    /**
     * @param boolean $RemoveAllEmailBodiesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\RemoveAllEmailBodiesResponse
     */
    public function setRemoveAllEmailBodiesResult($RemoveAllEmailBodiesResult)
    {
      $this->RemoveAllEmailBodiesResult = $RemoveAllEmailBodiesResult;
      return $this;
    }

}
