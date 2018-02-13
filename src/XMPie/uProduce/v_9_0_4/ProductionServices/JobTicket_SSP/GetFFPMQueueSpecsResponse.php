<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetFFPMQueueSpecsResponse
{

    /**
     * @var string $GetFFPMQueueSpecsResult
     */
    protected $GetFFPMQueueSpecsResult = null;

    /**
     * @param string $GetFFPMQueueSpecsResult
     */
    public function __construct($GetFFPMQueueSpecsResult = null)
    {
      $this->GetFFPMQueueSpecsResult = $GetFFPMQueueSpecsResult;
    }

    /**
     * @return string
     */
    public function getGetFFPMQueueSpecsResult()
    {
      return $this->GetFFPMQueueSpecsResult;
    }

    /**
     * @param string $GetFFPMQueueSpecsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetFFPMQueueSpecsResponse
     */
    public function setGetFFPMQueueSpecsResult($GetFFPMQueueSpecsResult)
    {
      $this->GetFFPMQueueSpecsResult = $GetFFPMQueueSpecsResult;
      return $this;
    }

}
