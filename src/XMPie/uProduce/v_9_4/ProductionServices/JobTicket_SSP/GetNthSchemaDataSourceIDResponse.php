<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class GetNthSchemaDataSourceIDResponse
{

    /**
     * @var string $GetNthSchemaDataSourceIDResult
     */
    protected $GetNthSchemaDataSourceIDResult = null;

    /**
     * @param string $GetNthSchemaDataSourceIDResult
     */
    public function __construct($GetNthSchemaDataSourceIDResult = null)
    {
      $this->GetNthSchemaDataSourceIDResult = $GetNthSchemaDataSourceIDResult;
    }

    /**
     * @return string
     */
    public function getGetNthSchemaDataSourceIDResult()
    {
      return $this->GetNthSchemaDataSourceIDResult;
    }

    /**
     * @param string $GetNthSchemaDataSourceIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetNthSchemaDataSourceIDResponse
     */
    public function setGetNthSchemaDataSourceIDResult($GetNthSchemaDataSourceIDResult)
    {
      $this->GetNthSchemaDataSourceIDResult = $GetNthSchemaDataSourceIDResult;
      return $this;
    }

}
