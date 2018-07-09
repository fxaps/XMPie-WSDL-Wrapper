<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Account_SSP;

class GetCampaignsResponse
{

    /**
     * @var ArrayOfString $GetCampaignsResult
     */
    protected $GetCampaignsResult = null;

    /**
     * @param ArrayOfString $GetCampaignsResult
     */
    public function __construct($GetCampaignsResult = null)
    {
      $this->GetCampaignsResult = $GetCampaignsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetCampaignsResult()
    {
      return $this->GetCampaignsResult;
    }

    /**
     * @param ArrayOfString $GetCampaignsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Account_SSP\GetCampaignsResponse
     */
    public function setGetCampaignsResult($GetCampaignsResult)
    {
      $this->GetCampaignsResult = $GetCampaignsResult;
      return $this;
    }

}
