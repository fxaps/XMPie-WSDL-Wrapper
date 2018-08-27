<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP;

class CreateFileResponse
{

    /**
     * @var string $CreateFileResult
     */
    protected $CreateFileResult = null;

    /**
     * @param string $CreateFileResult
     */
    public function __construct($CreateFileResult = null)
    {
      $this->CreateFileResult = $CreateFileResult;
    }

    /**
     * @return string
     */
    public function getCreateFileResult()
    {
      return $this->CreateFileResult;
    }

    /**
     * @param string $CreateFileResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP\CreateFileResponse
     */
    public function setCreateFileResult($CreateFileResult)
    {
      $this->CreateFileResult = $CreateFileResult;
      return $this;
    }

}
