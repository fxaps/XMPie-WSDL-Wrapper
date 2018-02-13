<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class GetNthSchemaNameResponse
{

    /**
     * @var string $GetNthSchemaNameResult
     */
    protected $GetNthSchemaNameResult = null;

    /**
     * @param string $GetNthSchemaNameResult
     */
    public function __construct($GetNthSchemaNameResult = null)
    {
      $this->GetNthSchemaNameResult = $GetNthSchemaNameResult;
    }

    /**
     * @return string
     */
    public function getGetNthSchemaNameResult()
    {
      return $this->GetNthSchemaNameResult;
    }

    /**
     * @param string $GetNthSchemaNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\GetNthSchemaNameResponse
     */
    public function setGetNthSchemaNameResult($GetNthSchemaNameResult)
    {
      $this->GetNthSchemaNameResult = $GetNthSchemaNameResult;
      return $this;
    }

}
