<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP;

class GetCampaignResponse
{

    /**
     * @var string $GetCampaignResult
     */
    protected $GetCampaignResult = null;

    /**
     * @param string $GetCampaignResult
     */
    public function __construct($GetCampaignResult = null)
    {
      $this->GetCampaignResult = $GetCampaignResult;
    }

    /**
     * @return string
     */
    public function getGetCampaignResult()
    {
      return $this->GetCampaignResult;
    }

    /**
     * @param string $GetCampaignResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\GetCampaignResponse
     */
    public function setGetCampaignResult($GetCampaignResult)
    {
      $this->GetCampaignResult = $GetCampaignResult;
      return $this;
    }

}
