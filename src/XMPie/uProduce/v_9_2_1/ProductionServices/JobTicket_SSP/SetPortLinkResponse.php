<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SetPortLinkResponse
{

    /**
     * @var boolean $SetPortLinkResult
     */
    protected $SetPortLinkResult = null;

    /**
     * @param boolean $SetPortLinkResult
     */
    public function __construct($SetPortLinkResult = null)
    {
      $this->SetPortLinkResult = $SetPortLinkResult;
    }

    /**
     * @return boolean
     */
    public function getSetPortLinkResult()
    {
      return $this->SetPortLinkResult;
    }

    /**
     * @param boolean $SetPortLinkResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetPortLinkResponse
     */
    public function setSetPortLinkResult($SetPortLinkResult)
    {
      $this->SetPortLinkResult = $SetPortLinkResult;
      return $this;
    }

}
