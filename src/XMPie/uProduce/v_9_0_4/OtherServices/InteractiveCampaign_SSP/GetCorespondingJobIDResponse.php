<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP;

class GetCorespondingJobIDResponse
{

    /**
     * @var int $GetCorespondingJobIDResult
     */
    protected $GetCorespondingJobIDResult = null;

    /**
     * @param int $GetCorespondingJobIDResult
     */
    public function __construct($GetCorespondingJobIDResult = null)
    {
      $this->GetCorespondingJobIDResult = $GetCorespondingJobIDResult;
    }

    /**
     * @return int
     */
    public function getGetCorespondingJobIDResult()
    {
      return $this->GetCorespondingJobIDResult;
    }

    /**
     * @param int $GetCorespondingJobIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetCorespondingJobIDResponse
     */
    public function setGetCorespondingJobIDResult($GetCorespondingJobIDResult)
    {
      $this->GetCorespondingJobIDResult = $GetCorespondingJobIDResult;
      return $this;
    }

}
