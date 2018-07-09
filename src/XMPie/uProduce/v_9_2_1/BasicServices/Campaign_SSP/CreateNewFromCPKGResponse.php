<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class CreateNewFromCPKGResponse
{

    /**
     * @var string $CreateNewFromCPKGResult
     */
    protected $CreateNewFromCPKGResult = null;

    /**
     * @param string $CreateNewFromCPKGResult
     */
    public function __construct($CreateNewFromCPKGResult = null)
    {
      $this->CreateNewFromCPKGResult = $CreateNewFromCPKGResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromCPKGResult()
    {
      return $this->CreateNewFromCPKGResult;
    }

    /**
     * @param string $CreateNewFromCPKGResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\CreateNewFromCPKGResponse
     */
    public function setCreateNewFromCPKGResult($CreateNewFromCPKGResult)
    {
      $this->CreateNewFromCPKGResult = $CreateNewFromCPKGResult;
      return $this;
    }

}
