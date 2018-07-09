<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP;

class GetDataSourceTypeXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDataSourceTypeXMPTblDataSetResult
     */
    protected $GetDataSourceTypeXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDataSourceTypeXMPTblDataSetResult
     */
    public function __construct($GetDataSourceTypeXMPTblDataSetResult = null)
    {
      $this->GetDataSourceTypeXMPTblDataSetResult = $GetDataSourceTypeXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDataSourceTypeXMPTblDataSetResult()
    {
      return $this->GetDataSourceTypeXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDataSourceTypeXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypeXMPTblDataSetResponse
     */
    public function setGetDataSourceTypeXMPTblDataSetResult($GetDataSourceTypeXMPTblDataSetResult)
    {
      $this->GetDataSourceTypeXMPTblDataSetResult = $GetDataSourceTypeXMPTblDataSetResult;
      return $this;
    }

}
