<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class GetPlanXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetPlanXMPTblDataSetResult
     */
    protected $GetPlanXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetPlanXMPTblDataSetResult
     */
    public function __construct($GetPlanXMPTblDataSetResult = null)
    {
      $this->GetPlanXMPTblDataSetResult = $GetPlanXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetPlanXMPTblDataSetResult()
    {
      return $this->GetPlanXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetPlanXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\GetPlanXMPTblDataSetResponse
     */
    public function setGetPlanXMPTblDataSetResult($GetPlanXMPTblDataSetResult)
    {
      $this->GetPlanXMPTblDataSetResult = $GetPlanXMPTblDataSetResult;
      return $this;
    }

}
