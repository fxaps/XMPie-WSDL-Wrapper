<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP;

class GetADORsValuesForRangeXMPDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetADORsValuesForRangeXMPDataSetResult
     */
    protected $GetADORsValuesForRangeXMPDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetADORsValuesForRangeXMPDataSetResult
     */
    public function __construct($GetADORsValuesForRangeXMPDataSetResult = null)
    {
      $this->GetADORsValuesForRangeXMPDataSetResult = $GetADORsValuesForRangeXMPDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetADORsValuesForRangeXMPDataSetResult()
    {
      return $this->GetADORsValuesForRangeXMPDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetADORsValuesForRangeXMPDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRangeXMPDataSetResponse
     */
    public function setGetADORsValuesForRangeXMPDataSetResult($GetADORsValuesForRangeXMPDataSetResult)
    {
      $this->GetADORsValuesForRangeXMPDataSetResult = $GetADORsValuesForRangeXMPDataSetResult;
      return $this;
    }

}
