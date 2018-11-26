<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetDataSourcesResponse
{

    /**
     * @var boolean $SetDataSourcesResult
     */
    protected $SetDataSourcesResult = null;

    /**
     * @param boolean $SetDataSourcesResult
     */
    public function __construct($SetDataSourcesResult = null)
    {
      $this->SetDataSourcesResult = $SetDataSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getSetDataSourcesResult()
    {
      return $this->SetDataSourcesResult;
    }

    /**
     * @param boolean $SetDataSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetDataSourcesResponse
     */
    public function setSetDataSourcesResult($SetDataSourcesResult)
    {
      $this->SetDataSourcesResult = $SetDataSourcesResult;
      return $this;
    }

}
