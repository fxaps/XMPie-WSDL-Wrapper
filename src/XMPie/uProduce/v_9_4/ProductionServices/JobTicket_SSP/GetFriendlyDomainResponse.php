<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class GetFriendlyDomainResponse
{

    /**
     * @var string $GetFriendlyDomainResult
     */
    protected $GetFriendlyDomainResult = null;

    /**
     * @param string $GetFriendlyDomainResult
     */
    public function __construct($GetFriendlyDomainResult = null)
    {
      $this->GetFriendlyDomainResult = $GetFriendlyDomainResult;
    }

    /**
     * @return string
     */
    public function getGetFriendlyDomainResult()
    {
      return $this->GetFriendlyDomainResult;
    }

    /**
     * @param string $GetFriendlyDomainResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetFriendlyDomainResponse
     */
    public function setGetFriendlyDomainResult($GetFriendlyDomainResult)
    {
      $this->GetFriendlyDomainResult = $GetFriendlyDomainResult;
      return $this;
    }

}
