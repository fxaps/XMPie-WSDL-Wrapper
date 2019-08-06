<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class GetTouchPointsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetTouchPointsXMPTblDataSetResult
     */
    protected $GetTouchPointsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetTouchPointsXMPTblDataSetResult
     */
    public function __construct($GetTouchPointsXMPTblDataSetResult = null)
    {
      $this->GetTouchPointsXMPTblDataSetResult = $GetTouchPointsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetTouchPointsXMPTblDataSetResult()
    {
      return $this->GetTouchPointsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetTouchPointsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\GetTouchPointsXMPTblDataSetResponse
     */
    public function setGetTouchPointsXMPTblDataSetResult($GetTouchPointsXMPTblDataSetResult)
    {
      $this->GetTouchPointsXMPTblDataSetResult = $GetTouchPointsXMPTblDataSetResult;
      return $this;
    }

}
