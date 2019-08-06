<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetJobReportCallbackURLResponse
{

    /**
     * @var string $GetJobReportCallbackURLResult
     */
    protected $GetJobReportCallbackURLResult = null;

    /**
     * @param string $GetJobReportCallbackURLResult
     */
    public function __construct($GetJobReportCallbackURLResult = null)
    {
      $this->GetJobReportCallbackURLResult = $GetJobReportCallbackURLResult;
    }

    /**
     * @return string
     */
    public function getGetJobReportCallbackURLResult()
    {
      return $this->GetJobReportCallbackURLResult;
    }

    /**
     * @param string $GetJobReportCallbackURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetJobReportCallbackURLResponse
     */
    public function setGetJobReportCallbackURLResult($GetJobReportCallbackURLResult)
    {
      $this->GetJobReportCallbackURLResult = $GetJobReportCallbackURLResult;
      return $this;
    }

}
