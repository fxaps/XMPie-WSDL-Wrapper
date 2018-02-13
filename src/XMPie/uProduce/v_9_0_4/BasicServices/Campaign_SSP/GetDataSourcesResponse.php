<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class GetDataSourcesResponse
{

    /**
     * @var ArrayOfString $GetDataSourcesResult
     */
    protected $GetDataSourcesResult = null;

    /**
     * @param ArrayOfString $GetDataSourcesResult
     */
    public function __construct($GetDataSourcesResult = null)
    {
      $this->GetDataSourcesResult = $GetDataSourcesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetDataSourcesResult()
    {
      return $this->GetDataSourcesResult;
    }

    /**
     * @param ArrayOfString $GetDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetDataSourcesResponse
     */
    public function setGetDataSourcesResult($GetDataSourcesResult)
    {
      $this->GetDataSourcesResult = $GetDataSourcesResult;
      return $this;
    }

}
