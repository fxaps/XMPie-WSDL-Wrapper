<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Plan_SSP;

class ConvertToWebReadyResponse
{

    /**
     * @var Report $ConvertToWebReadyResult
     */
    protected $ConvertToWebReadyResult = null;

    /**
     * @param Report $ConvertToWebReadyResult
     */
    public function __construct($ConvertToWebReadyResult = null)
    {
      $this->ConvertToWebReadyResult = $ConvertToWebReadyResult;
    }

    /**
     * @return Report
     */
    public function getConvertToWebReadyResult()
    {
      return $this->ConvertToWebReadyResult;
    }

    /**
     * @param Report $ConvertToWebReadyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Plan_SSP\ConvertToWebReadyResponse
     */
    public function setConvertToWebReadyResult($ConvertToWebReadyResult)
    {
      $this->ConvertToWebReadyResult = $ConvertToWebReadyResult;
      return $this;
    }

}
