<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Licensing_SSP;

class ValidateFeatureClientResponse
{

    /**
     * @var boolean $ValidateFeatureClientResult
     */
    protected $ValidateFeatureClientResult = null;

    /**
     * @param boolean $ValidateFeatureClientResult
     */
    public function __construct($ValidateFeatureClientResult = null)
    {
      $this->ValidateFeatureClientResult = $ValidateFeatureClientResult;
    }

    /**
     * @return boolean
     */
    public function getValidateFeatureClientResult()
    {
      return $this->ValidateFeatureClientResult;
    }

    /**
     * @param boolean $ValidateFeatureClientResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Licensing_SSP\ValidateFeatureClientResponse
     */
    public function setValidateFeatureClientResult($ValidateFeatureClientResult)
    {
      $this->ValidateFeatureClientResult = $ValidateFeatureClientResult;
      return $this;
    }

}
