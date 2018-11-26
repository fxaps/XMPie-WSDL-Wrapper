<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Font_SSP;

class GetPathResponse
{

    /**
     * @var string $GetPathResult
     */
    protected $GetPathResult = null;

    /**
     * @param string $GetPathResult
     */
    public function __construct($GetPathResult = null)
    {
      $this->GetPathResult = $GetPathResult;
    }

    /**
     * @return string
     */
    public function getGetPathResult()
    {
      return $this->GetPathResult;
    }

    /**
     * @param string $GetPathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Font_SSP\GetPathResponse
     */
    public function setGetPathResult($GetPathResult)
    {
      $this->GetPathResult = $GetPathResult;
      return $this;
    }

}
