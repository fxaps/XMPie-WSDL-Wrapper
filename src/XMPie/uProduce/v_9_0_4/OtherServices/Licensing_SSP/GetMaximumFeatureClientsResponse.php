<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP;

class GetMaximumFeatureClientsResponse
{

    /**
     * @var int $GetMaximumFeatureClientsResult
     */
    protected $GetMaximumFeatureClientsResult = null;

    /**
     * @param int $GetMaximumFeatureClientsResult
     */
    public function __construct($GetMaximumFeatureClientsResult = null)
    {
      $this->GetMaximumFeatureClientsResult = $GetMaximumFeatureClientsResult;
    }

    /**
     * @return int
     */
    public function getGetMaximumFeatureClientsResult()
    {
      return $this->GetMaximumFeatureClientsResult;
    }

    /**
     * @param int $GetMaximumFeatureClientsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\GetMaximumFeatureClientsResponse
     */
    public function setGetMaximumFeatureClientsResult($GetMaximumFeatureClientsResult)
    {
      $this->GetMaximumFeatureClientsResult = $GetMaximumFeatureClientsResult;
      return $this;
    }

}
