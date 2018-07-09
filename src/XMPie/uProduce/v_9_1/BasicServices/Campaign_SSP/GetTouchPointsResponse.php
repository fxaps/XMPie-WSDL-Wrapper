<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class GetTouchPointsResponse
{

    /**
     * @var ArrayOfString $GetTouchPointsResult
     */
    protected $GetTouchPointsResult = null;

    /**
     * @param ArrayOfString $GetTouchPointsResult
     */
    public function __construct($GetTouchPointsResult = null)
    {
      $this->GetTouchPointsResult = $GetTouchPointsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetTouchPointsResult()
    {
      return $this->GetTouchPointsResult;
    }

    /**
     * @param ArrayOfString $GetTouchPointsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\GetTouchPointsResponse
     */
    public function setGetTouchPointsResult($GetTouchPointsResult)
    {
      $this->GetTouchPointsResult = $GetTouchPointsResult;
      return $this;
    }

}
