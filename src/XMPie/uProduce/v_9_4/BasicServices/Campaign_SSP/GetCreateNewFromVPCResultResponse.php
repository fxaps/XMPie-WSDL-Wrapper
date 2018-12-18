<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP;

class GetCreateNewFromVPCResultResponse
{

    /**
     * @var CreateCampaignResult $GetCreateNewFromVPCResultResult
     */
    protected $GetCreateNewFromVPCResultResult = null;

    /**
     * @param CreateCampaignResult $GetCreateNewFromVPCResultResult
     */
    public function __construct($GetCreateNewFromVPCResultResult = null)
    {
      $this->GetCreateNewFromVPCResultResult = $GetCreateNewFromVPCResultResult;
    }

    /**
     * @return CreateCampaignResult
     */
    public function getGetCreateNewFromVPCResultResult()
    {
      return $this->GetCreateNewFromVPCResultResult;
    }

    /**
     * @param CreateCampaignResult $GetCreateNewFromVPCResultResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\GetCreateNewFromVPCResultResponse
     */
    public function setGetCreateNewFromVPCResultResult($GetCreateNewFromVPCResultResult)
    {
      $this->GetCreateNewFromVPCResultResult = $GetCreateNewFromVPCResultResult;
      return $this;
    }

}
