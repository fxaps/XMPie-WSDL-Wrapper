<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetJobReportingWebServiceResponse
{

    /**
     * @var string $GetJobReportingWebServiceResult
     */
    protected $GetJobReportingWebServiceResult = null;

    /**
     * @param string $GetJobReportingWebServiceResult
     */
    public function __construct($GetJobReportingWebServiceResult = null)
    {
      $this->GetJobReportingWebServiceResult = $GetJobReportingWebServiceResult;
    }

    /**
     * @return string
     */
    public function getGetJobReportingWebServiceResult()
    {
      return $this->GetJobReportingWebServiceResult;
    }

    /**
     * @param string $GetJobReportingWebServiceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetJobReportingWebServiceResponse
     */
    public function setGetJobReportingWebServiceResult($GetJobReportingWebServiceResult)
    {
      $this->GetJobReportingWebServiceResult = $GetJobReportingWebServiceResult;
      return $this;
    }

}
