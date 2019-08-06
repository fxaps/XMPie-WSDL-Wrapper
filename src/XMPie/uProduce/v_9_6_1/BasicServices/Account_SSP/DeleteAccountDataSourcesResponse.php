<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Account_SSP;

class DeleteAccountDataSourcesResponse
{

    /**
     * @var boolean $DeleteAccountDataSourcesResult
     */
    protected $DeleteAccountDataSourcesResult = null;

    /**
     * @param boolean $DeleteAccountDataSourcesResult
     */
    public function __construct($DeleteAccountDataSourcesResult = null)
    {
      $this->DeleteAccountDataSourcesResult = $DeleteAccountDataSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAccountDataSourcesResult()
    {
      return $this->DeleteAccountDataSourcesResult;
    }

    /**
     * @param boolean $DeleteAccountDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Account_SSP\DeleteAccountDataSourcesResponse
     */
    public function setDeleteAccountDataSourcesResult($DeleteAccountDataSourcesResult)
    {
      $this->DeleteAccountDataSourcesResult = $DeleteAccountDataSourcesResult;
      return $this;
    }

}
