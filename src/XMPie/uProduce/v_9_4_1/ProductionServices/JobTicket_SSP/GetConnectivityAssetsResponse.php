<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetConnectivityAssetsResponse
{

    /**
     * @var boolean $GetConnectivityAssetsResult
     */
    protected $GetConnectivityAssetsResult = null;

    /**
     * @param boolean $GetConnectivityAssetsResult
     */
    public function __construct($GetConnectivityAssetsResult = null)
    {
      $this->GetConnectivityAssetsResult = $GetConnectivityAssetsResult;
    }

    /**
     * @return boolean
     */
    public function getGetConnectivityAssetsResult()
    {
      return $this->GetConnectivityAssetsResult;
    }

    /**
     * @param boolean $GetConnectivityAssetsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetConnectivityAssetsResponse
     */
    public function setGetConnectivityAssetsResult($GetConnectivityAssetsResult)
    {
      $this->GetConnectivityAssetsResult = $GetConnectivityAssetsResult;
      return $this;
    }

}
