<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP;

class GetJobCountByFilterResponse
{

    /**
     * @var int $GetJobCountByFilterResult
     */
    protected $GetJobCountByFilterResult = null;

    /**
     * @param int $GetJobCountByFilterResult
     */
    public function __construct($GetJobCountByFilterResult = null)
    {
      $this->GetJobCountByFilterResult = $GetJobCountByFilterResult;
    }

    /**
     * @return int
     */
    public function getGetJobCountByFilterResult()
    {
      return $this->GetJobCountByFilterResult;
    }

    /**
     * @param int $GetJobCountByFilterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP\GetJobCountByFilterResponse
     */
    public function setGetJobCountByFilterResult($GetJobCountByFilterResult)
    {
      $this->GetJobCountByFilterResult = $GetJobCountByFilterResult;
      return $this;
    }

}
