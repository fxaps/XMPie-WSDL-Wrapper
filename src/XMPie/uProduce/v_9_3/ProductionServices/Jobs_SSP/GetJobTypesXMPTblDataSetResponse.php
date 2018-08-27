<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP;

class GetJobTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetJobTypesXMPTblDataSetResult
     */
    protected $GetJobTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetJobTypesXMPTblDataSetResult
     */
    public function __construct($GetJobTypesXMPTblDataSetResult = null)
    {
      $this->GetJobTypesXMPTblDataSetResult = $GetJobTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetJobTypesXMPTblDataSetResult()
    {
      return $this->GetJobTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetJobTypesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\GetJobTypesXMPTblDataSetResponse
     */
    public function setGetJobTypesXMPTblDataSetResult($GetJobTypesXMPTblDataSetResult)
    {
      $this->GetJobTypesXMPTblDataSetResult = $GetJobTypesXMPTblDataSetResult;
      return $this;
    }

}
