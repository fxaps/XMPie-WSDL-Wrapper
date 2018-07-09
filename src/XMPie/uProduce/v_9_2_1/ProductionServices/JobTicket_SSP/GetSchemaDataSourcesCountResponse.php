<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetSchemaDataSourcesCountResponse
{

    /**
     * @var int $GetSchemaDataSourcesCountResult
     */
    protected $GetSchemaDataSourcesCountResult = null;

    /**
     * @param int $GetSchemaDataSourcesCountResult
     */
    public function __construct($GetSchemaDataSourcesCountResult = null)
    {
      $this->GetSchemaDataSourcesCountResult = $GetSchemaDataSourcesCountResult;
    }

    /**
     * @return int
     */
    public function getGetSchemaDataSourcesCountResult()
    {
      return $this->GetSchemaDataSourcesCountResult;
    }

    /**
     * @param int $GetSchemaDataSourcesCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetSchemaDataSourcesCountResponse
     */
    public function setGetSchemaDataSourcesCountResult($GetSchemaDataSourcesCountResult)
    {
      $this->GetSchemaDataSourcesCountResult = $GetSchemaDataSourcesCountResult;
      return $this;
    }

}
