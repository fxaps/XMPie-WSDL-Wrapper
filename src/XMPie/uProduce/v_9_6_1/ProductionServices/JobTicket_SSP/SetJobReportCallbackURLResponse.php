<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetJobReportCallbackURLResponse
{

    /**
     * @var boolean $SetJobReportCallbackURLResult
     */
    protected $SetJobReportCallbackURLResult = null;

    /**
     * @param boolean $SetJobReportCallbackURLResult
     */
    public function __construct($SetJobReportCallbackURLResult = null)
    {
      $this->SetJobReportCallbackURLResult = $SetJobReportCallbackURLResult;
    }

    /**
     * @return boolean
     */
    public function getSetJobReportCallbackURLResult()
    {
      return $this->SetJobReportCallbackURLResult;
    }

    /**
     * @param boolean $SetJobReportCallbackURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetJobReportCallbackURLResponse
     */
    public function setSetJobReportCallbackURLResult($SetJobReportCallbackURLResult)
    {
      $this->SetJobReportCallbackURLResult = $SetJobReportCallbackURLResult;
      return $this;
    }

}
