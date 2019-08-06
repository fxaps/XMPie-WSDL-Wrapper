<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class RemovePortLinkResponse
{

    /**
     * @var boolean $RemovePortLinkResult
     */
    protected $RemovePortLinkResult = null;

    /**
     * @param boolean $RemovePortLinkResult
     */
    public function __construct($RemovePortLinkResult = null)
    {
      $this->RemovePortLinkResult = $RemovePortLinkResult;
    }

    /**
     * @return boolean
     */
    public function getRemovePortLinkResult()
    {
      return $this->RemovePortLinkResult;
    }

    /**
     * @param boolean $RemovePortLinkResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\RemovePortLinkResponse
     */
    public function setRemovePortLinkResult($RemovePortLinkResult)
    {
      $this->RemovePortLinkResult = $RemovePortLinkResult;
      return $this;
    }

}
