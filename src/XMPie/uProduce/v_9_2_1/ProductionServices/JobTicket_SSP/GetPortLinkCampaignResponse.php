<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetPortLinkCampaignResponse
{

    /**
     * @var string $GetPortLinkCampaignResult
     */
    protected $GetPortLinkCampaignResult = null;

    /**
     * @param string $GetPortLinkCampaignResult
     */
    public function __construct($GetPortLinkCampaignResult = null)
    {
      $this->GetPortLinkCampaignResult = $GetPortLinkCampaignResult;
    }

    /**
     * @return string
     */
    public function getGetPortLinkCampaignResult()
    {
      return $this->GetPortLinkCampaignResult;
    }

    /**
     * @param string $GetPortLinkCampaignResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetPortLinkCampaignResponse
     */
    public function setGetPortLinkCampaignResult($GetPortLinkCampaignResult)
    {
      $this->GetPortLinkCampaignResult = $GetPortLinkCampaignResult;
      return $this;
    }

}
