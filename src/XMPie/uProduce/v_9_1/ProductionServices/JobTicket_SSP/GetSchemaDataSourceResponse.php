<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetSchemaDataSourceResponse
{

    /**
     * @var Connection $GetSchemaDataSourceResult
     */
    protected $GetSchemaDataSourceResult = null;

    /**
     * @param Connection $GetSchemaDataSourceResult
     */
    public function __construct($GetSchemaDataSourceResult = null)
    {
      $this->GetSchemaDataSourceResult = $GetSchemaDataSourceResult;
    }

    /**
     * @return Connection
     */
    public function getGetSchemaDataSourceResult()
    {
      return $this->GetSchemaDataSourceResult;
    }

    /**
     * @param Connection $GetSchemaDataSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetSchemaDataSourceResponse
     */
    public function setGetSchemaDataSourceResult($GetSchemaDataSourceResult)
    {
      $this->GetSchemaDataSourceResult = $GetSchemaDataSourceResult;
      return $this;
    }

}
