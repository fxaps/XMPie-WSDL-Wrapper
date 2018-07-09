<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SetResolveAssetsResponse
{

    /**
     * @var boolean $SetResolveAssetsResult
     */
    protected $SetResolveAssetsResult = null;

    /**
     * @param boolean $SetResolveAssetsResult
     */
    public function __construct($SetResolveAssetsResult = null)
    {
      $this->SetResolveAssetsResult = $SetResolveAssetsResult;
    }

    /**
     * @return boolean
     */
    public function getSetResolveAssetsResult()
    {
      return $this->SetResolveAssetsResult;
    }

    /**
     * @param boolean $SetResolveAssetsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetResolveAssetsResponse
     */
    public function setSetResolveAssetsResult($SetResolveAssetsResult)
    {
      $this->SetResolveAssetsResult = $SetResolveAssetsResult;
      return $this;
    }

}
