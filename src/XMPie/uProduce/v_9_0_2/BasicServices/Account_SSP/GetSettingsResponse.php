<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP;

class GetSettingsResponse
{

    /**
     * @var ArrayOfSetting $GetSettingsResult
     */
    protected $GetSettingsResult = null;

    /**
     * @param ArrayOfSetting $GetSettingsResult
     */
    public function __construct($GetSettingsResult = null)
    {
      $this->GetSettingsResult = $GetSettingsResult;
    }

    /**
     * @return ArrayOfSetting
     */
    public function getGetSettingsResult()
    {
      return $this->GetSettingsResult;
    }

    /**
     * @param ArrayOfSetting $GetSettingsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\GetSettingsResponse
     */
    public function setGetSettingsResult($GetSettingsResult)
    {
      $this->GetSettingsResult = $GetSettingsResult;
      return $this;
    }

}
