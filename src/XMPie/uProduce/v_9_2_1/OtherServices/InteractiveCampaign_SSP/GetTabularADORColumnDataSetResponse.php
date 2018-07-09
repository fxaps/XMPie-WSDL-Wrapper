<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP;

class GetTabularADORColumnDataSetResponse
{

    /**
     * @var GetTabularADORColumnDataSetResult $GetTabularADORColumnDataSetResult
     */
    protected $GetTabularADORColumnDataSetResult = null;

    /**
     * @param GetTabularADORColumnDataSetResult $GetTabularADORColumnDataSetResult
     */
    public function __construct($GetTabularADORColumnDataSetResult = null)
    {
      $this->GetTabularADORColumnDataSetResult = $GetTabularADORColumnDataSetResult;
    }

    /**
     * @return GetTabularADORColumnDataSetResult
     */
    public function getGetTabularADORColumnDataSetResult()
    {
      return $this->GetTabularADORColumnDataSetResult;
    }

    /**
     * @param GetTabularADORColumnDataSetResult $GetTabularADORColumnDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnDataSetResponse
     */
    public function setGetTabularADORColumnDataSetResult($GetTabularADORColumnDataSetResult)
    {
      $this->GetTabularADORColumnDataSetResult = $GetTabularADORColumnDataSetResult;
      return $this;
    }

}
