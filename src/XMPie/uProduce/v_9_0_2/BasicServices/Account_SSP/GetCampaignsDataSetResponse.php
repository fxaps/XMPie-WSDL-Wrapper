<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP;

class GetCampaignsDataSetResponse
{

    /**
     * @var GetCampaignsDataSetResult $GetCampaignsDataSetResult
     */
    protected $GetCampaignsDataSetResult = null;

    /**
     * @param GetCampaignsDataSetResult $GetCampaignsDataSetResult
     */
    public function __construct($GetCampaignsDataSetResult = null)
    {
      $this->GetCampaignsDataSetResult = $GetCampaignsDataSetResult;
    }

    /**
     * @return GetCampaignsDataSetResult
     */
    public function getGetCampaignsDataSetResult()
    {
      return $this->GetCampaignsDataSetResult;
    }

    /**
     * @param GetCampaignsDataSetResult $GetCampaignsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\GetCampaignsDataSetResponse
     */
    public function setGetCampaignsDataSetResult($GetCampaignsDataSetResult)
    {
      $this->GetCampaignsDataSetResult = $GetCampaignsDataSetResult;
      return $this;
    }

}
