<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP;

class CreateNewFromFileResponse
{

    /**
     * @var string $CreateNewFromFileResult
     */
    protected $CreateNewFromFileResult = null;

    /**
     * @param string $CreateNewFromFileResult
     */
    public function __construct($CreateNewFromFileResult = null)
    {
      $this->CreateNewFromFileResult = $CreateNewFromFileResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromFileResult()
    {
      return $this->CreateNewFromFileResult;
    }

    /**
     * @param string $CreateNewFromFileResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\CreateNewFromFileResponse
     */
    public function setCreateNewFromFileResult($CreateNewFromFileResult)
    {
      $this->CreateNewFromFileResult = $CreateNewFromFileResult;
      return $this;
    }

}
