<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Account_SSP;

class GetAccountDataSourcesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetAccountDataSourcesXMPTblDataSetResult
     */
    protected $GetAccountDataSourcesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetAccountDataSourcesXMPTblDataSetResult
     */
    public function __construct($GetAccountDataSourcesXMPTblDataSetResult = null)
    {
      $this->GetAccountDataSourcesXMPTblDataSetResult = $GetAccountDataSourcesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetAccountDataSourcesXMPTblDataSetResult()
    {
      return $this->GetAccountDataSourcesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetAccountDataSourcesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Account_SSP\GetAccountDataSourcesXMPTblDataSetResponse
     */
    public function setGetAccountDataSourcesXMPTblDataSetResult($GetAccountDataSourcesXMPTblDataSetResult)
    {
      $this->GetAccountDataSourcesXMPTblDataSetResult = $GetAccountDataSourcesXMPTblDataSetResult;
      return $this;
    }

}
