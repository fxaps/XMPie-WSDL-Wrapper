<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP;

class CreateDPKGExResponse
{

    /**
     * @var string $CreateDPKGExResult
     */
    protected $CreateDPKGExResult = null;

    /**
     * @param string $CreateDPKGExResult
     */
    public function __construct($CreateDPKGExResult = null)
    {
      $this->CreateDPKGExResult = $CreateDPKGExResult;
    }

    /**
     * @return string
     */
    public function getCreateDPKGExResult()
    {
      return $this->CreateDPKGExResult;
    }

    /**
     * @param string $CreateDPKGExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\CreateDPKGExResponse
     */
    public function setCreateDPKGExResult($CreateDPKGExResult)
    {
      $this->CreateDPKGExResult = $CreateDPKGExResult;
      return $this;
    }

}
