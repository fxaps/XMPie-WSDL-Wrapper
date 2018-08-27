<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP;

class DeleteAllDataSourcesResponse
{

    /**
     * @var boolean $DeleteAllDataSourcesResult
     */
    protected $DeleteAllDataSourcesResult = null;

    /**
     * @param boolean $DeleteAllDataSourcesResult
     */
    public function __construct($DeleteAllDataSourcesResult = null)
    {
      $this->DeleteAllDataSourcesResult = $DeleteAllDataSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllDataSourcesResult()
    {
      return $this->DeleteAllDataSourcesResult;
    }

    /**
     * @param boolean $DeleteAllDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\DeleteAllDataSourcesResponse
     */
    public function setDeleteAllDataSourcesResult($DeleteAllDataSourcesResult)
    {
      $this->DeleteAllDataSourcesResult = $DeleteAllDataSourcesResult;
      return $this;
    }

}
