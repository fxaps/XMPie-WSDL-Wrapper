<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetResourceResponse
{

    /**
     * @var string $GetResourceResult
     */
    protected $GetResourceResult = null;

    /**
     * @param string $GetResourceResult
     */
    public function __construct($GetResourceResult = null)
    {
      $this->GetResourceResult = $GetResourceResult;
    }

    /**
     * @return string
     */
    public function getGetResourceResult()
    {
      return $this->GetResourceResult;
    }

    /**
     * @param string $GetResourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceResponse
     */
    public function setGetResourceResult($GetResourceResult)
    {
      $this->GetResourceResult = $GetResourceResult;
      return $this;
    }

}
