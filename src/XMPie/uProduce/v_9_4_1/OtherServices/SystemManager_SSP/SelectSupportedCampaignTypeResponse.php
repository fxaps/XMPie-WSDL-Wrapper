<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\SystemManager_SSP;

class SelectSupportedCampaignTypeResponse
{

    /**
     * @var boolean $SelectSupportedCampaignTypeResult
     */
    protected $SelectSupportedCampaignTypeResult = null;

    /**
     * @param boolean $SelectSupportedCampaignTypeResult
     */
    public function __construct($SelectSupportedCampaignTypeResult = null)
    {
      $this->SelectSupportedCampaignTypeResult = $SelectSupportedCampaignTypeResult;
    }

    /**
     * @return boolean
     */
    public function getSelectSupportedCampaignTypeResult()
    {
      return $this->SelectSupportedCampaignTypeResult;
    }

    /**
     * @param boolean $SelectSupportedCampaignTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\SystemManager_SSP\SelectSupportedCampaignTypeResponse
     */
    public function setSelectSupportedCampaignTypeResult($SelectSupportedCampaignTypeResult)
    {
      $this->SelectSupportedCampaignTypeResult = $SelectSupportedCampaignTypeResult;
      return $this;
    }

}
