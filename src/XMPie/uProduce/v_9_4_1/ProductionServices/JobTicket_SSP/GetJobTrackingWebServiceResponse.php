<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetJobTrackingWebServiceResponse
{

    /**
     * @var string $GetJobTrackingWebServiceResult
     */
    protected $GetJobTrackingWebServiceResult = null;

    /**
     * @param string $GetJobTrackingWebServiceResult
     */
    public function __construct($GetJobTrackingWebServiceResult = null)
    {
      $this->GetJobTrackingWebServiceResult = $GetJobTrackingWebServiceResult;
    }

    /**
     * @return string
     */
    public function getGetJobTrackingWebServiceResult()
    {
      return $this->GetJobTrackingWebServiceResult;
    }

    /**
     * @param string $GetJobTrackingWebServiceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetJobTrackingWebServiceResponse
     */
    public function setGetJobTrackingWebServiceResult($GetJobTrackingWebServiceResult)
    {
      $this->GetJobTrackingWebServiceResult = $GetJobTrackingWebServiceResult;
      return $this;
    }

}
