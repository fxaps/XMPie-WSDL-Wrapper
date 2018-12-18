<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class GetUMailOrigZipResponse
{

    /**
     * @var string $GetUMailOrigZipResult
     */
    protected $GetUMailOrigZipResult = null;

    /**
     * @param string $GetUMailOrigZipResult
     */
    public function __construct($GetUMailOrigZipResult = null)
    {
      $this->GetUMailOrigZipResult = $GetUMailOrigZipResult;
    }

    /**
     * @return string
     */
    public function getGetUMailOrigZipResult()
    {
      return $this->GetUMailOrigZipResult;
    }

    /**
     * @param string $GetUMailOrigZipResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetUMailOrigZipResponse
     */
    public function setGetUMailOrigZipResult($GetUMailOrigZipResult)
    {
      $this->GetUMailOrigZipResult = $GetUMailOrigZipResult;
      return $this;
    }

}
