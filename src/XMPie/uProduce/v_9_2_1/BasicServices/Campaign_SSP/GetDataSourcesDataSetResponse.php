<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class GetDataSourcesDataSetResponse
{

    /**
     * @var GetDataSourcesDataSetResult $GetDataSourcesDataSetResult
     */
    protected $GetDataSourcesDataSetResult = null;

    /**
     * @param GetDataSourcesDataSetResult $GetDataSourcesDataSetResult
     */
    public function __construct($GetDataSourcesDataSetResult = null)
    {
      $this->GetDataSourcesDataSetResult = $GetDataSourcesDataSetResult;
    }

    /**
     * @return GetDataSourcesDataSetResult
     */
    public function getGetDataSourcesDataSetResult()
    {
      return $this->GetDataSourcesDataSetResult;
    }

    /**
     * @param GetDataSourcesDataSetResult $GetDataSourcesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\GetDataSourcesDataSetResponse
     */
    public function setGetDataSourcesDataSetResult($GetDataSourcesDataSetResult)
    {
      $this->GetDataSourcesDataSetResult = $GetDataSourcesDataSetResult;
      return $this;
    }

}
