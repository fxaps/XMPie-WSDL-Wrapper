<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP;

class CreateNewExResponse
{

    /**
     * @var string $CreateNewExResult
     */
    protected $CreateNewExResult = null;

    /**
     * @param string $CreateNewExResult
     */
    public function __construct($CreateNewExResult = null)
    {
      $this->CreateNewExResult = $CreateNewExResult;
    }

    /**
     * @return string
     */
    public function getCreateNewExResult()
    {
      return $this->CreateNewExResult;
    }

    /**
     * @param string $CreateNewExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP\CreateNewExResponse
     */
    public function setCreateNewExResult($CreateNewExResult)
    {
      $this->CreateNewExResult = $CreateNewExResult;
      return $this;
    }

}
