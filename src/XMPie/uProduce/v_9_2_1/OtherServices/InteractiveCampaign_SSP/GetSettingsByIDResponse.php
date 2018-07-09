<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP;

class GetSettingsByIDResponse
{

    /**
     * @var ArrayOfSetting $GetSettingsByIDResult
     */
    protected $GetSettingsByIDResult = null;

    /**
     * @param ArrayOfSetting $GetSettingsByIDResult
     */
    public function __construct($GetSettingsByIDResult = null)
    {
      $this->GetSettingsByIDResult = $GetSettingsByIDResult;
    }

    /**
     * @return ArrayOfSetting
     */
    public function getGetSettingsByIDResult()
    {
      return $this->GetSettingsByIDResult;
    }

    /**
     * @param ArrayOfSetting $GetSettingsByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetSettingsByIDResponse
     */
    public function setGetSettingsByIDResult($GetSettingsByIDResult)
    {
      $this->GetSettingsByIDResult = $GetSettingsByIDResult;
      return $this;
    }

}
