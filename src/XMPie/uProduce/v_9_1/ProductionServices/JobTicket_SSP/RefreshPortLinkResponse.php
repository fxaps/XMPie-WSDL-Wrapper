<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class RefreshPortLinkResponse
{

    /**
     * @var boolean $RefreshPortLinkResult
     */
    protected $RefreshPortLinkResult = null;

    /**
     * @param boolean $RefreshPortLinkResult
     */
    public function __construct($RefreshPortLinkResult = null)
    {
      $this->RefreshPortLinkResult = $RefreshPortLinkResult;
    }

    /**
     * @return boolean
     */
    public function getRefreshPortLinkResult()
    {
      return $this->RefreshPortLinkResult;
    }

    /**
     * @param boolean $RefreshPortLinkResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\RefreshPortLinkResponse
     */
    public function setRefreshPortLinkResult($RefreshPortLinkResult)
    {
      $this->RefreshPortLinkResult = $RefreshPortLinkResult;
      return $this;
    }

}
