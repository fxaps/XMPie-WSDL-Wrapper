<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP;

class GetAssetsResponse
{

    /**
     * @var ArrayOfString $GetAssetsResult
     */
    protected $GetAssetsResult = null;

    /**
     * @param ArrayOfString $GetAssetsResult
     */
    public function __construct($GetAssetsResult = null)
    {
      $this->GetAssetsResult = $GetAssetsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAssetsResult()
    {
      return $this->GetAssetsResult;
    }

    /**
     * @param ArrayOfString $GetAssetsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsResponse
     */
    public function setGetAssetsResult($GetAssetsResult)
    {
      $this->GetAssetsResult = $GetAssetsResult;
      return $this;
    }

}
