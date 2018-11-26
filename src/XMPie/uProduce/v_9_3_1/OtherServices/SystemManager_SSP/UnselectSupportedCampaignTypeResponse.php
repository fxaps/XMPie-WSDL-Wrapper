<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\SystemManager_SSP;

class UnselectSupportedCampaignTypeResponse
{

    /**
     * @var boolean $UnselectSupportedCampaignTypeResult
     */
    protected $UnselectSupportedCampaignTypeResult = null;

    /**
     * @param boolean $UnselectSupportedCampaignTypeResult
     */
    public function __construct($UnselectSupportedCampaignTypeResult = null)
    {
      $this->UnselectSupportedCampaignTypeResult = $UnselectSupportedCampaignTypeResult;
    }

    /**
     * @return boolean
     */
    public function getUnselectSupportedCampaignTypeResult()
    {
      return $this->UnselectSupportedCampaignTypeResult;
    }

    /**
     * @param boolean $UnselectSupportedCampaignTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\SystemManager_SSP\UnselectSupportedCampaignTypeResponse
     */
    public function setUnselectSupportedCampaignTypeResult($UnselectSupportedCampaignTypeResult)
    {
      $this->UnselectSupportedCampaignTypeResult = $UnselectSupportedCampaignTypeResult;
      return $this;
    }

}
