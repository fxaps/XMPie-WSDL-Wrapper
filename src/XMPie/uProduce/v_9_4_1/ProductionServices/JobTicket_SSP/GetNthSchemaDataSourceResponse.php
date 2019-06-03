<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetNthSchemaDataSourceResponse
{

    /**
     * @var Connection $GetNthSchemaDataSourceResult
     */
    protected $GetNthSchemaDataSourceResult = null;

    /**
     * @param Connection $GetNthSchemaDataSourceResult
     */
    public function __construct($GetNthSchemaDataSourceResult = null)
    {
      $this->GetNthSchemaDataSourceResult = $GetNthSchemaDataSourceResult;
    }

    /**
     * @return Connection
     */
    public function getGetNthSchemaDataSourceResult()
    {
      return $this->GetNthSchemaDataSourceResult;
    }

    /**
     * @param Connection $GetNthSchemaDataSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetNthSchemaDataSourceResponse
     */
    public function setGetNthSchemaDataSourceResult($GetNthSchemaDataSourceResult)
    {
      $this->GetNthSchemaDataSourceResult = $GetNthSchemaDataSourceResult;
      return $this;
    }

}
