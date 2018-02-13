<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetTrackingParameterResponse
{

    /**
     * @var Parameter $GetTrackingParameterResult
     */
    protected $GetTrackingParameterResult = null;

    /**
     * @param Parameter $GetTrackingParameterResult
     */
    public function __construct($GetTrackingParameterResult = null)
    {
      $this->GetTrackingParameterResult = $GetTrackingParameterResult;
    }

    /**
     * @return Parameter
     */
    public function getGetTrackingParameterResult()
    {
      return $this->GetTrackingParameterResult;
    }

    /**
     * @param Parameter $GetTrackingParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetTrackingParameterResponse
     */
    public function setGetTrackingParameterResult($GetTrackingParameterResult)
    {
      $this->GetTrackingParameterResult = $GetTrackingParameterResult;
      return $this;
    }

}
