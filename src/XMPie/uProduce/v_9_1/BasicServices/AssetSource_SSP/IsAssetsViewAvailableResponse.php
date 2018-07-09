<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\AssetSource_SSP;

class IsAssetsViewAvailableResponse
{

    /**
     * @var boolean $IsAssetsViewAvailableResult
     */
    protected $IsAssetsViewAvailableResult = null;

    /**
     * @param boolean $IsAssetsViewAvailableResult
     */
    public function __construct($IsAssetsViewAvailableResult = null)
    {
      $this->IsAssetsViewAvailableResult = $IsAssetsViewAvailableResult;
    }

    /**
     * @return boolean
     */
    public function getIsAssetsViewAvailableResult()
    {
      return $this->IsAssetsViewAvailableResult;
    }

    /**
     * @param boolean $IsAssetsViewAvailableResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\AssetSource_SSP\IsAssetsViewAvailableResponse
     */
    public function setIsAssetsViewAvailableResult($IsAssetsViewAvailableResult)
    {
      $this->IsAssetsViewAvailableResult = $IsAssetsViewAvailableResult;
      return $this;
    }

}
