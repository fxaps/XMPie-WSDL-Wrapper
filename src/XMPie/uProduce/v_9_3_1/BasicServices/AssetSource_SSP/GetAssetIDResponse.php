<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP;

class GetAssetIDResponse
{

    /**
     * @var string $GetAssetIDResult
     */
    protected $GetAssetIDResult = null;

    /**
     * @param string $GetAssetIDResult
     */
    public function __construct($GetAssetIDResult = null)
    {
      $this->GetAssetIDResult = $GetAssetIDResult;
    }

    /**
     * @return string
     */
    public function getGetAssetIDResult()
    {
      return $this->GetAssetIDResult;
    }

    /**
     * @param string $GetAssetIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP\GetAssetIDResponse
     */
    public function setGetAssetIDResult($GetAssetIDResult)
    {
      $this->GetAssetIDResult = $GetAssetIDResult;
      return $this;
    }

}
