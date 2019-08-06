<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\Licensing_SSP;

class GetAvailableClicksResponse
{

    /**
     * @var float $GetAvailableClicksResult
     */
    protected $GetAvailableClicksResult = null;

    /**
     * @param float $GetAvailableClicksResult
     */
    public function __construct($GetAvailableClicksResult = null)
    {
      $this->GetAvailableClicksResult = $GetAvailableClicksResult;
    }

    /**
     * @return float
     */
    public function getGetAvailableClicksResult()
    {
      return $this->GetAvailableClicksResult;
    }

    /**
     * @param float $GetAvailableClicksResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\Licensing_SSP\GetAvailableClicksResponse
     */
    public function setGetAvailableClicksResult($GetAvailableClicksResult)
    {
      $this->GetAvailableClicksResult = $GetAvailableClicksResult;
      return $this;
    }

}
