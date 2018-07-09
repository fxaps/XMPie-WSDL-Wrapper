<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP;

class IsFeatureSupportedResponse
{

    /**
     * @var boolean $IsFeatureSupportedResult
     */
    protected $IsFeatureSupportedResult = null;

    /**
     * @param boolean $IsFeatureSupportedResult
     */
    public function __construct($IsFeatureSupportedResult = null)
    {
      $this->IsFeatureSupportedResult = $IsFeatureSupportedResult;
    }

    /**
     * @return boolean
     */
    public function getIsFeatureSupportedResult()
    {
      return $this->IsFeatureSupportedResult;
    }

    /**
     * @param boolean $IsFeatureSupportedResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsFeatureSupportedResponse
     */
    public function setIsFeatureSupportedResult($IsFeatureSupportedResult)
    {
      $this->IsFeatureSupportedResult = $IsFeatureSupportedResult;
      return $this;
    }

}
