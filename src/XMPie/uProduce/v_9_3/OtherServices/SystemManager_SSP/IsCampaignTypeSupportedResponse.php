<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP;

class IsCampaignTypeSupportedResponse
{

    /**
     * @var boolean $IsCampaignTypeSupportedResult
     */
    protected $IsCampaignTypeSupportedResult = null;

    /**
     * @param boolean $IsCampaignTypeSupportedResult
     */
    public function __construct($IsCampaignTypeSupportedResult = null)
    {
      $this->IsCampaignTypeSupportedResult = $IsCampaignTypeSupportedResult;
    }

    /**
     * @return boolean
     */
    public function getIsCampaignTypeSupportedResult()
    {
      return $this->IsCampaignTypeSupportedResult;
    }

    /**
     * @param boolean $IsCampaignTypeSupportedResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP\IsCampaignTypeSupportedResponse
     */
    public function setIsCampaignTypeSupportedResult($IsCampaignTypeSupportedResult)
    {
      $this->IsCampaignTypeSupportedResult = $IsCampaignTypeSupportedResult;
      return $this;
    }

}
