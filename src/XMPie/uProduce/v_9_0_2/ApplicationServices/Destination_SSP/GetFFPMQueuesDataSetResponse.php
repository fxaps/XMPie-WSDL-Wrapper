<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP;

class GetFFPMQueuesDataSetResponse
{

    /**
     * @var GetFFPMQueuesDataSetResult $GetFFPMQueuesDataSetResult
     */
    protected $GetFFPMQueuesDataSetResult = null;

    /**
     * @param GetFFPMQueuesDataSetResult $GetFFPMQueuesDataSetResult
     */
    public function __construct($GetFFPMQueuesDataSetResult = null)
    {
      $this->GetFFPMQueuesDataSetResult = $GetFFPMQueuesDataSetResult;
    }

    /**
     * @return GetFFPMQueuesDataSetResult
     */
    public function getGetFFPMQueuesDataSetResult()
    {
      return $this->GetFFPMQueuesDataSetResult;
    }

    /**
     * @param GetFFPMQueuesDataSetResult $GetFFPMQueuesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP\GetFFPMQueuesDataSetResponse
     */
    public function setGetFFPMQueuesDataSetResult($GetFFPMQueuesDataSetResult)
    {
      $this->GetFFPMQueuesDataSetResult = $GetFFPMQueuesDataSetResult;
      return $this;
    }

}
