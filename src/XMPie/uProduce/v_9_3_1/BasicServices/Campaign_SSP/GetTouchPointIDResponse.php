<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP;

class GetTouchPointIDResponse
{

    /**
     * @var string $GetTouchPointIDResult
     */
    protected $GetTouchPointIDResult = null;

    /**
     * @param string $GetTouchPointIDResult
     */
    public function __construct($GetTouchPointIDResult = null)
    {
      $this->GetTouchPointIDResult = $GetTouchPointIDResult;
    }

    /**
     * @return string
     */
    public function getGetTouchPointIDResult()
    {
      return $this->GetTouchPointIDResult;
    }

    /**
     * @param string $GetTouchPointIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\GetTouchPointIDResponse
     */
    public function setGetTouchPointIDResult($GetTouchPointIDResult)
    {
      $this->GetTouchPointIDResult = $GetTouchPointIDResult;
      return $this;
    }

}
