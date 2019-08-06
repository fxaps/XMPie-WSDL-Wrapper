<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP;

class GetCorespondingJobIDAsStringResponse
{

    /**
     * @var string $GetCorespondingJobIDAsStringResult
     */
    protected $GetCorespondingJobIDAsStringResult = null;

    /**
     * @param string $GetCorespondingJobIDAsStringResult
     */
    public function __construct($GetCorespondingJobIDAsStringResult = null)
    {
      $this->GetCorespondingJobIDAsStringResult = $GetCorespondingJobIDAsStringResult;
    }

    /**
     * @return string
     */
    public function getGetCorespondingJobIDAsStringResult()
    {
      return $this->GetCorespondingJobIDAsStringResult;
    }

    /**
     * @param string $GetCorespondingJobIDAsStringResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetCorespondingJobIDAsStringResponse
     */
    public function setGetCorespondingJobIDAsStringResult($GetCorespondingJobIDAsStringResult)
    {
      $this->GetCorespondingJobIDAsStringResult = $GetCorespondingJobIDAsStringResult;
      return $this;
    }

}
