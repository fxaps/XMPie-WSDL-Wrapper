<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetSchemasNamesResponse
{

    /**
     * @var ArrayOfString $GetSchemasNamesResult
     */
    protected $GetSchemasNamesResult = null;

    /**
     * @param ArrayOfString $GetSchemasNamesResult
     */
    public function __construct($GetSchemasNamesResult = null)
    {
      $this->GetSchemasNamesResult = $GetSchemasNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetSchemasNamesResult()
    {
      return $this->GetSchemasNamesResult;
    }

    /**
     * @param ArrayOfString $GetSchemasNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetSchemasNamesResponse
     */
    public function setGetSchemasNamesResult($GetSchemasNamesResult)
    {
      $this->GetSchemasNamesResult = $GetSchemasNamesResult;
      return $this;
    }

}
