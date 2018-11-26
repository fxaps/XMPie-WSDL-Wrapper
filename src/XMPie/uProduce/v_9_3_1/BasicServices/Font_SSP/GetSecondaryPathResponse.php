<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Font_SSP;

class GetSecondaryPathResponse
{

    /**
     * @var string $GetSecondaryPathResult
     */
    protected $GetSecondaryPathResult = null;

    /**
     * @param string $GetSecondaryPathResult
     */
    public function __construct($GetSecondaryPathResult = null)
    {
      $this->GetSecondaryPathResult = $GetSecondaryPathResult;
    }

    /**
     * @return string
     */
    public function getGetSecondaryPathResult()
    {
      return $this->GetSecondaryPathResult;
    }

    /**
     * @param string $GetSecondaryPathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Font_SSP\GetSecondaryPathResponse
     */
    public function setGetSecondaryPathResult($GetSecondaryPathResult)
    {
      $this->GetSecondaryPathResult = $GetSecondaryPathResult;
      return $this;
    }

}
