<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP;

class GetADORDataSetResponse
{

    /**
     * @var GetADORDataSetResult $GetADORDataSetResult
     */
    protected $GetADORDataSetResult = null;

    /**
     * @param GetADORDataSetResult $GetADORDataSetResult
     */
    public function __construct($GetADORDataSetResult = null)
    {
      $this->GetADORDataSetResult = $GetADORDataSetResult;
    }

    /**
     * @return GetADORDataSetResult
     */
    public function getGetADORDataSetResult()
    {
      return $this->GetADORDataSetResult;
    }

    /**
     * @param GetADORDataSetResult $GetADORDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetADORDataSetResponse
     */
    public function setGetADORDataSetResult($GetADORDataSetResult)
    {
      $this->GetADORDataSetResult = $GetADORDataSetResult;
      return $this;
    }

}
