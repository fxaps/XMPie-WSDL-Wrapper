<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetFriendlyLandingPageResponse
{

    /**
     * @var string $GetFriendlyLandingPageResult
     */
    protected $GetFriendlyLandingPageResult = null;

    /**
     * @param string $GetFriendlyLandingPageResult
     */
    public function __construct($GetFriendlyLandingPageResult = null)
    {
      $this->GetFriendlyLandingPageResult = $GetFriendlyLandingPageResult;
    }

    /**
     * @return string
     */
    public function getGetFriendlyLandingPageResult()
    {
      return $this->GetFriendlyLandingPageResult;
    }

    /**
     * @param string $GetFriendlyLandingPageResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetFriendlyLandingPageResponse
     */
    public function setGetFriendlyLandingPageResult($GetFriendlyLandingPageResult)
    {
      $this->GetFriendlyLandingPageResult = $GetFriendlyLandingPageResult;
      return $this;
    }

}
