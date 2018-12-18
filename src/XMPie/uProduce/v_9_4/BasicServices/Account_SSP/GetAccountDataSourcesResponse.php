<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Account_SSP;

class GetAccountDataSourcesResponse
{

    /**
     * @var ArrayOfString $GetAccountDataSourcesResult
     */
    protected $GetAccountDataSourcesResult = null;

    /**
     * @param ArrayOfString $GetAccountDataSourcesResult
     */
    public function __construct($GetAccountDataSourcesResult = null)
    {
      $this->GetAccountDataSourcesResult = $GetAccountDataSourcesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAccountDataSourcesResult()
    {
      return $this->GetAccountDataSourcesResult;
    }

    /**
     * @param ArrayOfString $GetAccountDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Account_SSP\GetAccountDataSourcesResponse
     */
    public function setGetAccountDataSourcesResult($GetAccountDataSourcesResult)
    {
      $this->GetAccountDataSourcesResult = $GetAccountDataSourcesResult;
      return $this;
    }

}
