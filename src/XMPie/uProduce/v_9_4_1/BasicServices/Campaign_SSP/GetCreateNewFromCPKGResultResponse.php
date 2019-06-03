<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class GetCreateNewFromCPKGResultResponse
{

    /**
     * @var CreateCampaignResult $GetCreateNewFromCPKGResultResult
     */
    protected $GetCreateNewFromCPKGResultResult = null;

    /**
     * @param CreateCampaignResult $GetCreateNewFromCPKGResultResult
     */
    public function __construct($GetCreateNewFromCPKGResultResult = null)
    {
      $this->GetCreateNewFromCPKGResultResult = $GetCreateNewFromCPKGResultResult;
    }

    /**
     * @return CreateCampaignResult
     */
    public function getGetCreateNewFromCPKGResultResult()
    {
      return $this->GetCreateNewFromCPKGResultResult;
    }

    /**
     * @param CreateCampaignResult $GetCreateNewFromCPKGResultResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetCreateNewFromCPKGResultResponse
     */
    public function setGetCreateNewFromCPKGResultResult($GetCreateNewFromCPKGResultResult)
    {
      $this->GetCreateNewFromCPKGResultResult = $GetCreateNewFromCPKGResultResult;
      return $this;
    }

}
