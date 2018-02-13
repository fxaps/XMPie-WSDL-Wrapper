<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP;

class DeleteFeatureClientResponse
{

    /**
     * @var boolean $DeleteFeatureClientResult
     */
    protected $DeleteFeatureClientResult = null;

    /**
     * @param boolean $DeleteFeatureClientResult
     */
    public function __construct($DeleteFeatureClientResult = null)
    {
      $this->DeleteFeatureClientResult = $DeleteFeatureClientResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteFeatureClientResult()
    {
      return $this->DeleteFeatureClientResult;
    }

    /**
     * @param boolean $DeleteFeatureClientResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\DeleteFeatureClientResponse
     */
    public function setDeleteFeatureClientResult($DeleteFeatureClientResult)
    {
      $this->DeleteFeatureClientResult = $DeleteFeatureClientResult;
      return $this;
    }

}
