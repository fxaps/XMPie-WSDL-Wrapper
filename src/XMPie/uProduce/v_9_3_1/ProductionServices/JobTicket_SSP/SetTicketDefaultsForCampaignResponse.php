<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetTicketDefaultsForCampaignResponse
{

    /**
     * @var boolean $SetTicketDefaultsForCampaignResult
     */
    protected $SetTicketDefaultsForCampaignResult = null;

    /**
     * @param boolean $SetTicketDefaultsForCampaignResult
     */
    public function __construct($SetTicketDefaultsForCampaignResult = null)
    {
      $this->SetTicketDefaultsForCampaignResult = $SetTicketDefaultsForCampaignResult;
    }

    /**
     * @return boolean
     */
    public function getSetTicketDefaultsForCampaignResult()
    {
      return $this->SetTicketDefaultsForCampaignResult;
    }

    /**
     * @param boolean $SetTicketDefaultsForCampaignResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetTicketDefaultsForCampaignResponse
     */
    public function setSetTicketDefaultsForCampaignResult($SetTicketDefaultsForCampaignResult)
    {
      $this->SetTicketDefaultsForCampaignResult = $SetTicketDefaultsForCampaignResult;
      return $this;
    }

}
