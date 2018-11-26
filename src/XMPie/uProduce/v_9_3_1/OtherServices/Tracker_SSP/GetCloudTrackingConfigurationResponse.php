<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP;

class GetCloudTrackingConfigurationResponse
{

    /**
     * @var string $GetCloudTrackingConfigurationResult
     */
    protected $GetCloudTrackingConfigurationResult = null;

    /**
     * @param string $GetCloudTrackingConfigurationResult
     */
    public function __construct($GetCloudTrackingConfigurationResult = null)
    {
      $this->GetCloudTrackingConfigurationResult = $GetCloudTrackingConfigurationResult;
    }

    /**
     * @return string
     */
    public function getGetCloudTrackingConfigurationResult()
    {
      return $this->GetCloudTrackingConfigurationResult;
    }

    /**
     * @param string $GetCloudTrackingConfigurationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\GetCloudTrackingConfigurationResponse
     */
    public function setGetCloudTrackingConfigurationResult($GetCloudTrackingConfigurationResult)
    {
      $this->GetCloudTrackingConfigurationResult = $GetCloudTrackingConfigurationResult;
      return $this;
    }

}
