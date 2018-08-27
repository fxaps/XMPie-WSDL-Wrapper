<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class GetPrinterResponse
{

    /**
     * @var string $GetPrinterResult
     */
    protected $GetPrinterResult = null;

    /**
     * @param string $GetPrinterResult
     */
    public function __construct($GetPrinterResult = null)
    {
      $this->GetPrinterResult = $GetPrinterResult;
    }

    /**
     * @return string
     */
    public function getGetPrinterResult()
    {
      return $this->GetPrinterResult;
    }

    /**
     * @param string $GetPrinterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\GetPrinterResponse
     */
    public function setGetPrinterResult($GetPrinterResult)
    {
      $this->GetPrinterResult = $GetPrinterResult;
      return $this;
    }

}
