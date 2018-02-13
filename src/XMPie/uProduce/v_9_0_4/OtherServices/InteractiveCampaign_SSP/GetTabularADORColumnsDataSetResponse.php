<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP;

class GetTabularADORColumnsDataSetResponse
{

    /**
     * @var GetTabularADORColumnsDataSetResult $GetTabularADORColumnsDataSetResult
     */
    protected $GetTabularADORColumnsDataSetResult = null;

    /**
     * @param GetTabularADORColumnsDataSetResult $GetTabularADORColumnsDataSetResult
     */
    public function __construct($GetTabularADORColumnsDataSetResult = null)
    {
      $this->GetTabularADORColumnsDataSetResult = $GetTabularADORColumnsDataSetResult;
    }

    /**
     * @return GetTabularADORColumnsDataSetResult
     */
    public function getGetTabularADORColumnsDataSetResult()
    {
      return $this->GetTabularADORColumnsDataSetResult;
    }

    /**
     * @param GetTabularADORColumnsDataSetResult $GetTabularADORColumnsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnsDataSetResponse
     */
    public function setGetTabularADORColumnsDataSetResult($GetTabularADORColumnsDataSetResult)
    {
      $this->GetTabularADORColumnsDataSetResult = $GetTabularADORColumnsDataSetResult;
      return $this;
    }

}
