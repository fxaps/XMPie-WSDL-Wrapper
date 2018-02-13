<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP;

class GetCloudTrackingInfoResponse
{

    /**
     * @var CloudTrackingInfo $GetCloudTrackingInfoResult
     */
    protected $GetCloudTrackingInfoResult = null;

    /**
     * @param CloudTrackingInfo $GetCloudTrackingInfoResult
     */
    public function __construct($GetCloudTrackingInfoResult = null)
    {
      $this->GetCloudTrackingInfoResult = $GetCloudTrackingInfoResult;
    }

    /**
     * @return CloudTrackingInfo
     */
    public function getGetCloudTrackingInfoResult()
    {
      return $this->GetCloudTrackingInfoResult;
    }

    /**
     * @param CloudTrackingInfo $GetCloudTrackingInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\GetCloudTrackingInfoResponse
     */
    public function setGetCloudTrackingInfoResult($GetCloudTrackingInfoResult)
    {
      $this->GetCloudTrackingInfoResult = $GetCloudTrackingInfoResult;
      return $this;
    }

}
