<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Job_SSP;

class GetMessagesHighestSeverityResponse
{

    /**
     * @var int $GetMessagesHighestSeverityResult
     */
    protected $GetMessagesHighestSeverityResult = null;

    /**
     * @param int $GetMessagesHighestSeverityResult
     */
    public function __construct($GetMessagesHighestSeverityResult = null)
    {
      $this->GetMessagesHighestSeverityResult = $GetMessagesHighestSeverityResult;
    }

    /**
     * @return int
     */
    public function getGetMessagesHighestSeverityResult()
    {
      return $this->GetMessagesHighestSeverityResult;
    }

    /**
     * @param int $GetMessagesHighestSeverityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Job_SSP\GetMessagesHighestSeverityResponse
     */
    public function setGetMessagesHighestSeverityResult($GetMessagesHighestSeverityResult)
    {
      $this->GetMessagesHighestSeverityResult = $GetMessagesHighestSeverityResult;
      return $this;
    }

}
