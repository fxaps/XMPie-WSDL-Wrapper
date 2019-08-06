<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP;

class GetResponse
{

    /**
     * @var GetResult $GetResult
     */
    protected $GetResult = null;

    /**
     * @param GetResult $GetResult
     */
    public function __construct($GetResult = null)
    {
      $this->GetResult = $GetResult;
    }

    /**
     * @return GetResult
     */
    public function getGetResult()
    {
      return $this->GetResult;
    }

    /**
     * @param GetResult $GetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetResponse
     */
    public function setGetResult($GetResult)
    {
      $this->GetResult = $GetResult;
      return $this;
    }

}
