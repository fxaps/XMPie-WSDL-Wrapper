<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\AssetSource_SSP;

class SetAssetSourceParametersResponse
{

    /**
     * @var boolean $SetAssetSourceParametersResult
     */
    protected $SetAssetSourceParametersResult = null;

    /**
     * @param boolean $SetAssetSourceParametersResult
     */
    public function __construct($SetAssetSourceParametersResult = null)
    {
      $this->SetAssetSourceParametersResult = $SetAssetSourceParametersResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetSourceParametersResult()
    {
      return $this->SetAssetSourceParametersResult;
    }

    /**
     * @param boolean $SetAssetSourceParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\AssetSource_SSP\SetAssetSourceParametersResponse
     */
    public function setSetAssetSourceParametersResult($SetAssetSourceParametersResult)
    {
      $this->SetAssetSourceParametersResult = $SetAssetSourceParametersResult;
      return $this;
    }

}
