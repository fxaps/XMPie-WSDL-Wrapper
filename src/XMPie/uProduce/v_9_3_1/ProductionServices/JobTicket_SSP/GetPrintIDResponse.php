<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetPrintIDResponse
{

    /**
     * @var string $GetPrintIDResult
     */
    protected $GetPrintIDResult = null;

    /**
     * @param string $GetPrintIDResult
     */
    public function __construct($GetPrintIDResult = null)
    {
      $this->GetPrintIDResult = $GetPrintIDResult;
    }

    /**
     * @return string
     */
    public function getGetPrintIDResult()
    {
      return $this->GetPrintIDResult;
    }

    /**
     * @param string $GetPrintIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetPrintIDResponse
     */
    public function setGetPrintIDResult($GetPrintIDResult)
    {
      $this->GetPrintIDResult = $GetPrintIDResult;
      return $this;
    }

}
