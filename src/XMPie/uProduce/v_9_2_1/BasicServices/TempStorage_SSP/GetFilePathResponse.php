<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\TempStorage_SSP;

class GetFilePathResponse
{

    /**
     * @var string $GetFilePathResult
     */
    protected $GetFilePathResult = null;

    /**
     * @param string $GetFilePathResult
     */
    public function __construct($GetFilePathResult = null)
    {
      $this->GetFilePathResult = $GetFilePathResult;
    }

    /**
     * @return string
     */
    public function getGetFilePathResult()
    {
      return $this->GetFilePathResult;
    }

    /**
     * @param string $GetFilePathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\TempStorage_SSP\GetFilePathResponse
     */
    public function setGetFilePathResult($GetFilePathResult)
    {
      $this->GetFilePathResult = $GetFilePathResult;
      return $this;
    }

}
