<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP;

class GetTouchPointResponse
{

    /**
     * @var string $GetTouchPointResult
     */
    protected $GetTouchPointResult = null;

    /**
     * @param string $GetTouchPointResult
     */
    public function __construct($GetTouchPointResult = null)
    {
      $this->GetTouchPointResult = $GetTouchPointResult;
    }

    /**
     * @return string
     */
    public function getGetTouchPointResult()
    {
      return $this->GetTouchPointResult;
    }

    /**
     * @param string $GetTouchPointResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetTouchPointResponse
     */
    public function setGetTouchPointResult($GetTouchPointResult)
    {
      $this->GetTouchPointResult = $GetTouchPointResult;
      return $this;
    }

}
