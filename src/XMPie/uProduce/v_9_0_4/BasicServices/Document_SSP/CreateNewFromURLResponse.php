<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class CreateNewFromURLResponse
{

    /**
     * @var string $CreateNewFromURLResult
     */
    protected $CreateNewFromURLResult = null;

    /**
     * @param string $CreateNewFromURLResult
     */
    public function __construct($CreateNewFromURLResult = null)
    {
      $this->CreateNewFromURLResult = $CreateNewFromURLResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromURLResult()
    {
      return $this->CreateNewFromURLResult;
    }

    /**
     * @param string $CreateNewFromURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\CreateNewFromURLResponse
     */
    public function setCreateNewFromURLResult($CreateNewFromURLResult)
    {
      $this->CreateNewFromURLResult = $CreateNewFromURLResult;
      return $this;
    }

}
