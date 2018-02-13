<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP;

class GetFileNameResponse
{

    /**
     * @var string $GetFileNameResult
     */
    protected $GetFileNameResult = null;

    /**
     * @param string $GetFileNameResult
     */
    public function __construct($GetFileNameResult = null)
    {
      $this->GetFileNameResult = $GetFileNameResult;
    }

    /**
     * @return string
     */
    public function getGetFileNameResult()
    {
      return $this->GetFileNameResult;
    }

    /**
     * @param string $GetFileNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\GetFileNameResponse
     */
    public function setGetFileNameResult($GetFileNameResult)
    {
      $this->GetFileNameResult = $GetFileNameResult;
      return $this;
    }

}
