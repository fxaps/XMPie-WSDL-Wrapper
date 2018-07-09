<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class DeleteDataSourcesResponse
{

    /**
     * @var boolean $DeleteDataSourcesResult
     */
    protected $DeleteDataSourcesResult = null;

    /**
     * @param boolean $DeleteDataSourcesResult
     */
    public function __construct($DeleteDataSourcesResult = null)
    {
      $this->DeleteDataSourcesResult = $DeleteDataSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteDataSourcesResult()
    {
      return $this->DeleteDataSourcesResult;
    }

    /**
     * @param boolean $DeleteDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\DeleteDataSourcesResponse
     */
    public function setDeleteDataSourcesResult($DeleteDataSourcesResult)
    {
      $this->DeleteDataSourcesResult = $DeleteDataSourcesResult;
      return $this;
    }

}
