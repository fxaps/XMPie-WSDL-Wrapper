<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SetConnectivityAssetsResponse
{

    /**
     * @var boolean $SetConnectivityAssetsResult
     */
    protected $SetConnectivityAssetsResult = null;

    /**
     * @param boolean $SetConnectivityAssetsResult
     */
    public function __construct($SetConnectivityAssetsResult = null)
    {
      $this->SetConnectivityAssetsResult = $SetConnectivityAssetsResult;
    }

    /**
     * @return boolean
     */
    public function getSetConnectivityAssetsResult()
    {
      return $this->SetConnectivityAssetsResult;
    }

    /**
     * @param boolean $SetConnectivityAssetsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetConnectivityAssetsResponse
     */
    public function setSetConnectivityAssetsResult($SetConnectivityAssetsResult)
    {
      $this->SetConnectivityAssetsResult = $SetConnectivityAssetsResult;
      return $this;
    }

}
