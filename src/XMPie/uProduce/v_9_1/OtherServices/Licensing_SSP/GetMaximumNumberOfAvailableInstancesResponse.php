<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP;

class GetMaximumNumberOfAvailableInstancesResponse
{

    /**
     * @var int $GetMaximumNumberOfAvailableInstancesResult
     */
    protected $GetMaximumNumberOfAvailableInstancesResult = null;

    /**
     * @param int $GetMaximumNumberOfAvailableInstancesResult
     */
    public function __construct($GetMaximumNumberOfAvailableInstancesResult = null)
    {
      $this->GetMaximumNumberOfAvailableInstancesResult = $GetMaximumNumberOfAvailableInstancesResult;
    }

    /**
     * @return int
     */
    public function getGetMaximumNumberOfAvailableInstancesResult()
    {
      return $this->GetMaximumNumberOfAvailableInstancesResult;
    }

    /**
     * @param int $GetMaximumNumberOfAvailableInstancesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP\GetMaximumNumberOfAvailableInstancesResponse
     */
    public function setGetMaximumNumberOfAvailableInstancesResult($GetMaximumNumberOfAvailableInstancesResult)
    {
      $this->GetMaximumNumberOfAvailableInstancesResult = $GetMaximumNumberOfAvailableInstancesResult;
      return $this;
    }

}
