<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetDefaultDataSourcesResponse
{

    /**
     * @var boolean $SetDefaultDataSourcesResult
     */
    protected $SetDefaultDataSourcesResult = null;

    /**
     * @param boolean $SetDefaultDataSourcesResult
     */
    public function __construct($SetDefaultDataSourcesResult = null)
    {
      $this->SetDefaultDataSourcesResult = $SetDefaultDataSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getSetDefaultDataSourcesResult()
    {
      return $this->SetDefaultDataSourcesResult;
    }

    /**
     * @param boolean $SetDefaultDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetDefaultDataSourcesResponse
     */
    public function setSetDefaultDataSourcesResult($SetDefaultDataSourcesResult)
    {
      $this->SetDefaultDataSourcesResult = $SetDefaultDataSourcesResult;
      return $this;
    }

}
