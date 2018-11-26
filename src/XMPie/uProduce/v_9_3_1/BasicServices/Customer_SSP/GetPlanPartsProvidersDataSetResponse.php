<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP;

class GetPlanPartsProvidersDataSetResponse
{

    /**
     * @var GetPlanPartsProvidersDataSetResult $GetPlanPartsProvidersDataSetResult
     */
    protected $GetPlanPartsProvidersDataSetResult = null;

    /**
     * @param GetPlanPartsProvidersDataSetResult $GetPlanPartsProvidersDataSetResult
     */
    public function __construct($GetPlanPartsProvidersDataSetResult = null)
    {
      $this->GetPlanPartsProvidersDataSetResult = $GetPlanPartsProvidersDataSetResult;
    }

    /**
     * @return GetPlanPartsProvidersDataSetResult
     */
    public function getGetPlanPartsProvidersDataSetResult()
    {
      return $this->GetPlanPartsProvidersDataSetResult;
    }

    /**
     * @param GetPlanPartsProvidersDataSetResult $GetPlanPartsProvidersDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP\GetPlanPartsProvidersDataSetResponse
     */
    public function setGetPlanPartsProvidersDataSetResult($GetPlanPartsProvidersDataSetResult)
    {
      $this->GetPlanPartsProvidersDataSetResult = $GetPlanPartsProvidersDataSetResult;
      return $this;
    }

}
