<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP;

class GetTouchPointsDataSetResponse
{

    /**
     * @var GetTouchPointsDataSetResult $GetTouchPointsDataSetResult
     */
    protected $GetTouchPointsDataSetResult = null;

    /**
     * @param GetTouchPointsDataSetResult $GetTouchPointsDataSetResult
     */
    public function __construct($GetTouchPointsDataSetResult = null)
    {
      $this->GetTouchPointsDataSetResult = $GetTouchPointsDataSetResult;
    }

    /**
     * @return GetTouchPointsDataSetResult
     */
    public function getGetTouchPointsDataSetResult()
    {
      return $this->GetTouchPointsDataSetResult;
    }

    /**
     * @param GetTouchPointsDataSetResult $GetTouchPointsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\GetTouchPointsDataSetResponse
     */
    public function setGetTouchPointsDataSetResult($GetTouchPointsDataSetResult)
    {
      $this->GetTouchPointsDataSetResult = $GetTouchPointsDataSetResult;
      return $this;
    }

}
