<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP;

class GetADORsValuesForRangeResponse
{

    /**
     * @var GetADORsValuesForRangeResult $GetADORsValuesForRangeResult
     */
    protected $GetADORsValuesForRangeResult = null;

    /**
     * @param GetADORsValuesForRangeResult $GetADORsValuesForRangeResult
     */
    public function __construct($GetADORsValuesForRangeResult = null)
    {
      $this->GetADORsValuesForRangeResult = $GetADORsValuesForRangeResult;
    }

    /**
     * @return GetADORsValuesForRangeResult
     */
    public function getGetADORsValuesForRangeResult()
    {
      return $this->GetADORsValuesForRangeResult;
    }

    /**
     * @param GetADORsValuesForRangeResult $GetADORsValuesForRangeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRangeResponse
     */
    public function setGetADORsValuesForRangeResult($GetADORsValuesForRangeResult)
    {
      $this->GetADORsValuesForRangeResult = $GetADORsValuesForRangeResult;
      return $this;
    }

}
