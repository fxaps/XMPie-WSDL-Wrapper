<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP;

class GetStatusResponse
{

    /**
     * @var int $GetStatusResult
     */
    protected $GetStatusResult = null;

    /**
     * @param int $GetStatusResult
     */
    public function __construct($GetStatusResult = null)
    {
      $this->GetStatusResult = $GetStatusResult;
    }

    /**
     * @return int
     */
    public function getGetStatusResult()
    {
      return $this->GetStatusResult;
    }

    /**
     * @param int $GetStatusResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetStatusResponse
     */
    public function setGetStatusResult($GetStatusResult)
    {
      $this->GetStatusResult = $GetStatusResult;
      return $this;
    }

}
