<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Account_SSP;

class GetAccountDataSourcesDataSetResponse
{

    /**
     * @var GetAccountDataSourcesDataSetResult $GetAccountDataSourcesDataSetResult
     */
    protected $GetAccountDataSourcesDataSetResult = null;

    /**
     * @param GetAccountDataSourcesDataSetResult $GetAccountDataSourcesDataSetResult
     */
    public function __construct($GetAccountDataSourcesDataSetResult = null)
    {
      $this->GetAccountDataSourcesDataSetResult = $GetAccountDataSourcesDataSetResult;
    }

    /**
     * @return GetAccountDataSourcesDataSetResult
     */
    public function getGetAccountDataSourcesDataSetResult()
    {
      return $this->GetAccountDataSourcesDataSetResult;
    }

    /**
     * @param GetAccountDataSourcesDataSetResult $GetAccountDataSourcesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Account_SSP\GetAccountDataSourcesDataSetResponse
     */
    public function setGetAccountDataSourcesDataSetResult($GetAccountDataSourcesDataSetResult)
    {
      $this->GetAccountDataSourcesDataSetResult = $GetAccountDataSourcesDataSetResult;
      return $this;
    }

}
