<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP;

class GetPlanPartsProvidersXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetPlanPartsProvidersXMPTblDataSetResult
     */
    protected $GetPlanPartsProvidersXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetPlanPartsProvidersXMPTblDataSetResult
     */
    public function __construct($GetPlanPartsProvidersXMPTblDataSetResult = null)
    {
      $this->GetPlanPartsProvidersXMPTblDataSetResult = $GetPlanPartsProvidersXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetPlanPartsProvidersXMPTblDataSetResult()
    {
      return $this->GetPlanPartsProvidersXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetPlanPartsProvidersXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\GetPlanPartsProvidersXMPTblDataSetResponse
     */
    public function setGetPlanPartsProvidersXMPTblDataSetResult($GetPlanPartsProvidersXMPTblDataSetResult)
    {
      $this->GetPlanPartsProvidersXMPTblDataSetResult = $GetPlanPartsProvidersXMPTblDataSetResult;
      return $this;
    }

}
