<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class CreateNewTicketForCampaignResponse
{

    /**
     * @var string $CreateNewTicketForCampaignResult
     */
    protected $CreateNewTicketForCampaignResult = null;

    /**
     * @param string $CreateNewTicketForCampaignResult
     */
    public function __construct($CreateNewTicketForCampaignResult = null)
    {
      $this->CreateNewTicketForCampaignResult = $CreateNewTicketForCampaignResult;
    }

    /**
     * @return string
     */
    public function getCreateNewTicketForCampaignResult()
    {
      return $this->CreateNewTicketForCampaignResult;
    }

    /**
     * @param string $CreateNewTicketForCampaignResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\CreateNewTicketForCampaignResponse
     */
    public function setCreateNewTicketForCampaignResult($CreateNewTicketForCampaignResult)
    {
      $this->CreateNewTicketForCampaignResult = $CreateNewTicketForCampaignResult;
      return $this;
    }

}
