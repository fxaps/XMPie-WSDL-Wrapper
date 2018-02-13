<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetWebPathResponse
{

    /**
     * @var string $GetWebPathResult
     */
    protected $GetWebPathResult = null;

    /**
     * @param string $GetWebPathResult
     */
    public function __construct($GetWebPathResult = null)
    {
      $this->GetWebPathResult = $GetWebPathResult;
    }

    /**
     * @return string
     */
    public function getGetWebPathResult()
    {
      return $this->GetWebPathResult;
    }

    /**
     * @param string $GetWebPathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetWebPathResponse
     */
    public function setGetWebPathResult($GetWebPathResult)
    {
      $this->GetWebPathResult = $GetWebPathResult;
      return $this;
    }

}
