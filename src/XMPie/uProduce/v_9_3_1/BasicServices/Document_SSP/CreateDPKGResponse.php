<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP;

class CreateDPKGResponse
{

    /**
     * @var string $CreateDPKGResult
     */
    protected $CreateDPKGResult = null;

    /**
     * @param string $CreateDPKGResult
     */
    public function __construct($CreateDPKGResult = null)
    {
      $this->CreateDPKGResult = $CreateDPKGResult;
    }

    /**
     * @return string
     */
    public function getCreateDPKGResult()
    {
      return $this->CreateDPKGResult;
    }

    /**
     * @param string $CreateDPKGResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\CreateDPKGResponse
     */
    public function setCreateDPKGResult($CreateDPKGResult)
    {
      $this->CreateDPKGResult = $CreateDPKGResult;
      return $this;
    }

}
