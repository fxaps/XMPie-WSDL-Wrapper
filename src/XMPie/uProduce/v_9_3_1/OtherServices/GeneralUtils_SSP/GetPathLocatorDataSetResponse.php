<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\GeneralUtils_SSP;

class GetPathLocatorDataSetResponse
{

    /**
     * @var GetPathLocatorDataSetResult $GetPathLocatorDataSetResult
     */
    protected $GetPathLocatorDataSetResult = null;

    /**
     * @param GetPathLocatorDataSetResult $GetPathLocatorDataSetResult
     */
    public function __construct($GetPathLocatorDataSetResult = null)
    {
      $this->GetPathLocatorDataSetResult = $GetPathLocatorDataSetResult;
    }

    /**
     * @return GetPathLocatorDataSetResult
     */
    public function getGetPathLocatorDataSetResult()
    {
      return $this->GetPathLocatorDataSetResult;
    }

    /**
     * @param GetPathLocatorDataSetResult $GetPathLocatorDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\GeneralUtils_SSP\GetPathLocatorDataSetResponse
     */
    public function setGetPathLocatorDataSetResult($GetPathLocatorDataSetResult)
    {
      $this->GetPathLocatorDataSetResult = $GetPathLocatorDataSetResult;
      return $this;
    }

}
