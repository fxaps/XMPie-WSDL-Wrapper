<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class SetCampaignIDResponse
{

    /**
     * @var boolean $SetCampaignIDResult
     */
    protected $SetCampaignIDResult = null;

    /**
     * @param boolean $SetCampaignIDResult
     */
    public function __construct($SetCampaignIDResult = null)
    {
      $this->SetCampaignIDResult = $SetCampaignIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetCampaignIDResult()
    {
      return $this->SetCampaignIDResult;
    }

    /**
     * @param boolean $SetCampaignIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetCampaignIDResponse
     */
    public function setSetCampaignIDResult($SetCampaignIDResult)
    {
      $this->SetCampaignIDResult = $SetCampaignIDResult;
      return $this;
    }

}
