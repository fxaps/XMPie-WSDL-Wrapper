<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Account_SSP;

class DeleteAllAccountDataSourcesResponse
{

    /**
     * @var boolean $DeleteAllAccountDataSourcesResult
     */
    protected $DeleteAllAccountDataSourcesResult = null;

    /**
     * @param boolean $DeleteAllAccountDataSourcesResult
     */
    public function __construct($DeleteAllAccountDataSourcesResult = null)
    {
      $this->DeleteAllAccountDataSourcesResult = $DeleteAllAccountDataSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllAccountDataSourcesResult()
    {
      return $this->DeleteAllAccountDataSourcesResult;
    }

    /**
     * @param boolean $DeleteAllAccountDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Account_SSP\DeleteAllAccountDataSourcesResponse
     */
    public function setDeleteAllAccountDataSourcesResult($DeleteAllAccountDataSourcesResult)
    {
      $this->DeleteAllAccountDataSourcesResult = $DeleteAllAccountDataSourcesResult;
      return $this;
    }

}
