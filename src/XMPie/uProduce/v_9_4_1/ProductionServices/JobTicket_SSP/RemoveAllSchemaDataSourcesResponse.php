<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class RemoveAllSchemaDataSourcesResponse
{

    /**
     * @var boolean $RemoveAllSchemaDataSourcesResult
     */
    protected $RemoveAllSchemaDataSourcesResult = null;

    /**
     * @param boolean $RemoveAllSchemaDataSourcesResult
     */
    public function __construct($RemoveAllSchemaDataSourcesResult = null)
    {
      $this->RemoveAllSchemaDataSourcesResult = $RemoveAllSchemaDataSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllSchemaDataSourcesResult()
    {
      return $this->RemoveAllSchemaDataSourcesResult;
    }

    /**
     * @param boolean $RemoveAllSchemaDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\RemoveAllSchemaDataSourcesResponse
     */
    public function setRemoveAllSchemaDataSourcesResult($RemoveAllSchemaDataSourcesResult)
    {
      $this->RemoveAllSchemaDataSourcesResult = $RemoveAllSchemaDataSourcesResult;
      return $this;
    }

}
