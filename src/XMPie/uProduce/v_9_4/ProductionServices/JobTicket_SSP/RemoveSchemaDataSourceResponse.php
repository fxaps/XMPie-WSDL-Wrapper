<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class RemoveSchemaDataSourceResponse
{

    /**
     * @var boolean $RemoveSchemaDataSourceResult
     */
    protected $RemoveSchemaDataSourceResult = null;

    /**
     * @param boolean $RemoveSchemaDataSourceResult
     */
    public function __construct($RemoveSchemaDataSourceResult = null)
    {
      $this->RemoveSchemaDataSourceResult = $RemoveSchemaDataSourceResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveSchemaDataSourceResult()
    {
      return $this->RemoveSchemaDataSourceResult;
    }

    /**
     * @param boolean $RemoveSchemaDataSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\RemoveSchemaDataSourceResponse
     */
    public function setRemoveSchemaDataSourceResult($RemoveSchemaDataSourceResult)
    {
      $this->RemoveSchemaDataSourceResult = $RemoveSchemaDataSourceResult;
      return $this;
    }

}
