<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetTrackingADORsResponse
{

    /**
     * @var ArrayOfString $GetTrackingADORsResult
     */
    protected $GetTrackingADORsResult = null;

    /**
     * @param ArrayOfString $GetTrackingADORsResult
     */
    public function __construct($GetTrackingADORsResult = null)
    {
      $this->GetTrackingADORsResult = $GetTrackingADORsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetTrackingADORsResult()
    {
      return $this->GetTrackingADORsResult;
    }

    /**
     * @param ArrayOfString $GetTrackingADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetTrackingADORsResponse
     */
    public function setGetTrackingADORsResult($GetTrackingADORsResult)
    {
      $this->GetTrackingADORsResult = $GetTrackingADORsResult;
      return $this;
    }

}
