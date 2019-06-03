<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetNthAssetSourceIDResponse
{

    /**
     * @var string $GetNthAssetSourceIDResult
     */
    protected $GetNthAssetSourceIDResult = null;

    /**
     * @param string $GetNthAssetSourceIDResult
     */
    public function __construct($GetNthAssetSourceIDResult = null)
    {
      $this->GetNthAssetSourceIDResult = $GetNthAssetSourceIDResult;
    }

    /**
     * @return string
     */
    public function getGetNthAssetSourceIDResult()
    {
      return $this->GetNthAssetSourceIDResult;
    }

    /**
     * @param string $GetNthAssetSourceIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetNthAssetSourceIDResponse
     */
    public function setGetNthAssetSourceIDResult($GetNthAssetSourceIDResult)
    {
      $this->GetNthAssetSourceIDResult = $GetNthAssetSourceIDResult;
      return $this;
    }

}
