<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class GetDataSourcesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDataSourcesXMPTblDataSetResult
     */
    protected $GetDataSourcesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDataSourcesXMPTblDataSetResult
     */
    public function __construct($GetDataSourcesXMPTblDataSetResult = null)
    {
      $this->GetDataSourcesXMPTblDataSetResult = $GetDataSourcesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDataSourcesXMPTblDataSetResult()
    {
      return $this->GetDataSourcesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDataSourcesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\GetDataSourcesXMPTblDataSetResponse
     */
    public function setGetDataSourcesXMPTblDataSetResult($GetDataSourcesXMPTblDataSetResult)
    {
      $this->GetDataSourcesXMPTblDataSetResult = $GetDataSourcesXMPTblDataSetResult;
      return $this;
    }

}
