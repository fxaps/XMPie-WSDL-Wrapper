<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class IsPrinterDeleteSourceResponse
{

    /**
     * @var boolean $IsPrinterDeleteSourceResult
     */
    protected $IsPrinterDeleteSourceResult = null;

    /**
     * @param boolean $IsPrinterDeleteSourceResult
     */
    public function __construct($IsPrinterDeleteSourceResult = null)
    {
      $this->IsPrinterDeleteSourceResult = $IsPrinterDeleteSourceResult;
    }

    /**
     * @return boolean
     */
    public function getIsPrinterDeleteSourceResult()
    {
      return $this->IsPrinterDeleteSourceResult;
    }

    /**
     * @param boolean $IsPrinterDeleteSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\IsPrinterDeleteSourceResponse
     */
    public function setIsPrinterDeleteSourceResult($IsPrinterDeleteSourceResult)
    {
      $this->IsPrinterDeleteSourceResult = $IsPrinterDeleteSourceResult;
      return $this;
    }

}
