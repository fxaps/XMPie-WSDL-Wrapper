<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP;

class GetAssetsDataSetResponse
{

    /**
     * @var GetAssetsDataSetResult $GetAssetsDataSetResult
     */
    protected $GetAssetsDataSetResult = null;

    /**
     * @param GetAssetsDataSetResult $GetAssetsDataSetResult
     */
    public function __construct($GetAssetsDataSetResult = null)
    {
      $this->GetAssetsDataSetResult = $GetAssetsDataSetResult;
    }

    /**
     * @return GetAssetsDataSetResult
     */
    public function getGetAssetsDataSetResult()
    {
      return $this->GetAssetsDataSetResult;
    }

    /**
     * @param GetAssetsDataSetResult $GetAssetsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP\GetAssetsDataSetResponse
     */
    public function setGetAssetsDataSetResult($GetAssetsDataSetResult)
    {
      $this->GetAssetsDataSetResult = $GetAssetsDataSetResult;
      return $this;
    }

}
