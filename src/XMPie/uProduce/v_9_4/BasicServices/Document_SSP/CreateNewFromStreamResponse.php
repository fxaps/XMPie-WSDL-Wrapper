<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP;

class CreateNewFromStreamResponse
{

    /**
     * @var string $CreateNewFromStreamResult
     */
    protected $CreateNewFromStreamResult = null;

    /**
     * @param string $CreateNewFromStreamResult
     */
    public function __construct($CreateNewFromStreamResult = null)
    {
      $this->CreateNewFromStreamResult = $CreateNewFromStreamResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromStreamResult()
    {
      return $this->CreateNewFromStreamResult;
    }

    /**
     * @param string $CreateNewFromStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\CreateNewFromStreamResponse
     */
    public function setCreateNewFromStreamResult($CreateNewFromStreamResult)
    {
      $this->CreateNewFromStreamResult = $CreateNewFromStreamResult;
      return $this;
    }

}
