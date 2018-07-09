<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetSchemasDataSourcesResponse
{

    /**
     * @var ArrayOfConnection $GetSchemasDataSourcesResult
     */
    protected $GetSchemasDataSourcesResult = null;

    /**
     * @param ArrayOfConnection $GetSchemasDataSourcesResult
     */
    public function __construct($GetSchemasDataSourcesResult = null)
    {
      $this->GetSchemasDataSourcesResult = $GetSchemasDataSourcesResult;
    }

    /**
     * @return ArrayOfConnection
     */
    public function getGetSchemasDataSourcesResult()
    {
      return $this->GetSchemasDataSourcesResult;
    }

    /**
     * @param ArrayOfConnection $GetSchemasDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetSchemasDataSourcesResponse
     */
    public function setGetSchemasDataSourcesResult($GetSchemasDataSourcesResult)
    {
      $this->GetSchemasDataSourcesResult = $GetSchemasDataSourcesResult;
      return $this;
    }

}
