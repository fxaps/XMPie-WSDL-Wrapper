<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP;

class GetPropertyResponse
{

    /**
     * @var Property $GetPropertyResult
     */
    protected $GetPropertyResult = null;

    /**
     * @param Property $GetPropertyResult
     */
    public function __construct($GetPropertyResult = null)
    {
      $this->GetPropertyResult = $GetPropertyResult;
    }

    /**
     * @return Property
     */
    public function getGetPropertyResult()
    {
      return $this->GetPropertyResult;
    }

    /**
     * @param Property $GetPropertyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\GetPropertyResponse
     */
    public function setGetPropertyResult($GetPropertyResult)
    {
      $this->GetPropertyResult = $GetPropertyResult;
      return $this;
    }

}
