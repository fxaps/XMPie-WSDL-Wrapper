<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP;

class GetPlanPartsProviderIDsResponse
{

    /**
     * @var ArrayOfString $GetPlanPartsProviderIDsResult
     */
    protected $GetPlanPartsProviderIDsResult = null;

    /**
     * @param ArrayOfString $GetPlanPartsProviderIDsResult
     */
    public function __construct($GetPlanPartsProviderIDsResult = null)
    {
      $this->GetPlanPartsProviderIDsResult = $GetPlanPartsProviderIDsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetPlanPartsProviderIDsResult()
    {
      return $this->GetPlanPartsProviderIDsResult;
    }

    /**
     * @param ArrayOfString $GetPlanPartsProviderIDsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\GetPlanPartsProviderIDsResponse
     */
    public function setGetPlanPartsProviderIDsResult($GetPlanPartsProviderIDsResult)
    {
      $this->GetPlanPartsProviderIDsResult = $GetPlanPartsProviderIDsResult;
      return $this;
    }

}
