<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP;

class GetStatusByIDResponse
{

    /**
     * @var StatusInfo $GetStatusByIDResult
     */
    protected $GetStatusByIDResult = null;

    /**
     * @param StatusInfo $GetStatusByIDResult
     */
    public function __construct($GetStatusByIDResult = null)
    {
      $this->GetStatusByIDResult = $GetStatusByIDResult;
    }

    /**
     * @return StatusInfo
     */
    public function getGetStatusByIDResult()
    {
      return $this->GetStatusByIDResult;
    }

    /**
     * @param StatusInfo $GetStatusByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\GetStatusByIDResponse
     */
    public function setGetStatusByIDResult($GetStatusByIDResult)
    {
      $this->GetStatusByIDResult = $GetStatusByIDResult;
      return $this;
    }

}
