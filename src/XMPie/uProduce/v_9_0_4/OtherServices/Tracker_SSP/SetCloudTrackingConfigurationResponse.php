<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP;

class SetCloudTrackingConfigurationResponse
{

    /**
     * @var boolean $SetCloudTrackingConfigurationResult
     */
    protected $SetCloudTrackingConfigurationResult = null;

    /**
     * @param boolean $SetCloudTrackingConfigurationResult
     */
    public function __construct($SetCloudTrackingConfigurationResult = null)
    {
      $this->SetCloudTrackingConfigurationResult = $SetCloudTrackingConfigurationResult;
    }

    /**
     * @return boolean
     */
    public function getSetCloudTrackingConfigurationResult()
    {
      return $this->SetCloudTrackingConfigurationResult;
    }

    /**
     * @param boolean $SetCloudTrackingConfigurationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\SetCloudTrackingConfigurationResponse
     */
    public function setSetCloudTrackingConfigurationResult($SetCloudTrackingConfigurationResult)
    {
      $this->SetCloudTrackingConfigurationResult = $SetCloudTrackingConfigurationResult;
      return $this;
    }

}
