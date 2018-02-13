<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSourcePlanUtils_SSP;

class GetDataSourceTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDataSourceTypesXMPTblDataSetResult
     */
    protected $GetDataSourceTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDataSourceTypesXMPTblDataSetResult
     */
    public function __construct($GetDataSourceTypesXMPTblDataSetResult = null)
    {
      $this->GetDataSourceTypesXMPTblDataSetResult = $GetDataSourceTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDataSourceTypesXMPTblDataSetResult()
    {
      return $this->GetDataSourceTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDataSourceTypesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypesXMPTblDataSetResponse
     */
    public function setGetDataSourceTypesXMPTblDataSetResult($GetDataSourceTypesXMPTblDataSetResult)
    {
      $this->GetDataSourceTypesXMPTblDataSetResult = $GetDataSourceTypesXMPTblDataSetResult;
      return $this;
    }

}
