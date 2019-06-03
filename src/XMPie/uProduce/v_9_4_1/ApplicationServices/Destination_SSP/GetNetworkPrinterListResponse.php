<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ApplicationServices\Destination_SSP;

class GetNetworkPrinterListResponse
{

    /**
     * @var ArrayOfString $GetNetworkPrinterListResult
     */
    protected $GetNetworkPrinterListResult = null;

    /**
     * @param ArrayOfString $GetNetworkPrinterListResult
     */
    public function __construct($GetNetworkPrinterListResult = null)
    {
      $this->GetNetworkPrinterListResult = $GetNetworkPrinterListResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetNetworkPrinterListResult()
    {
      return $this->GetNetworkPrinterListResult;
    }

    /**
     * @param ArrayOfString $GetNetworkPrinterListResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ApplicationServices\Destination_SSP\GetNetworkPrinterListResponse
     */
    public function setGetNetworkPrinterListResult($GetNetworkPrinterListResult)
    {
      $this->GetNetworkPrinterListResult = $GetNetworkPrinterListResult;
      return $this;
    }

}
