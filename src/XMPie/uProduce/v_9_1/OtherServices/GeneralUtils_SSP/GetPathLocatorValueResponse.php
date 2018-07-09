<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP;

class GetPathLocatorValueResponse
{

    /**
     * @var string $GetPathLocatorValueResult
     */
    protected $GetPathLocatorValueResult = null;

    /**
     * @param string $GetPathLocatorValueResult
     */
    public function __construct($GetPathLocatorValueResult = null)
    {
      $this->GetPathLocatorValueResult = $GetPathLocatorValueResult;
    }

    /**
     * @return string
     */
    public function getGetPathLocatorValueResult()
    {
      return $this->GetPathLocatorValueResult;
    }

    /**
     * @param string $GetPathLocatorValueResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\GetPathLocatorValueResponse
     */
    public function setGetPathLocatorValueResult($GetPathLocatorValueResult)
    {
      $this->GetPathLocatorValueResult = $GetPathLocatorValueResult;
      return $this;
    }

}
