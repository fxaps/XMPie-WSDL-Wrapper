<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetPortLinkAccountResponse
{

    /**
     * @var string $GetPortLinkAccountResult
     */
    protected $GetPortLinkAccountResult = null;

    /**
     * @param string $GetPortLinkAccountResult
     */
    public function __construct($GetPortLinkAccountResult = null)
    {
      $this->GetPortLinkAccountResult = $GetPortLinkAccountResult;
    }

    /**
     * @return string
     */
    public function getGetPortLinkAccountResult()
    {
      return $this->GetPortLinkAccountResult;
    }

    /**
     * @param string $GetPortLinkAccountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetPortLinkAccountResponse
     */
    public function setGetPortLinkAccountResult($GetPortLinkAccountResult)
    {
      $this->GetPortLinkAccountResult = $GetPortLinkAccountResult;
      return $this;
    }

}
