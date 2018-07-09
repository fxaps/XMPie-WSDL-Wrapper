<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP;

class GetADORsResponse
{

    /**
     * @var ArrayOfPlanObject $GetADORsResult
     */
    protected $GetADORsResult = null;

    /**
     * @param ArrayOfPlanObject $GetADORsResult
     */
    public function __construct($GetADORsResult = null)
    {
      $this->GetADORsResult = $GetADORsResult;
    }

    /**
     * @return ArrayOfPlanObject
     */
    public function getGetADORsResult()
    {
      return $this->GetADORsResult;
    }

    /**
     * @param ArrayOfPlanObject $GetADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetADORsResponse
     */
    public function setGetADORsResult($GetADORsResult)
    {
      $this->GetADORsResult = $GetADORsResult;
      return $this;
    }

}
