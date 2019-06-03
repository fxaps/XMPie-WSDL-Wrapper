<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetDataSourceResponse
{

    /**
     * @var boolean $SetDataSourceResult
     */
    protected $SetDataSourceResult = null;

    /**
     * @param boolean $SetDataSourceResult
     */
    public function __construct($SetDataSourceResult = null)
    {
      $this->SetDataSourceResult = $SetDataSourceResult;
    }

    /**
     * @return boolean
     */
    public function getSetDataSourceResult()
    {
      return $this->SetDataSourceResult;
    }

    /**
     * @param boolean $SetDataSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetDataSourceResponse
     */
    public function setSetDataSourceResult($SetDataSourceResult)
    {
      $this->SetDataSourceResult = $SetDataSourceResult;
      return $this;
    }

}
