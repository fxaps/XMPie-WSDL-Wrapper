<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetDataSourcesByIDResponse
{

    /**
     * @var boolean $SetDataSourcesByIDResult
     */
    protected $SetDataSourcesByIDResult = null;

    /**
     * @param boolean $SetDataSourcesByIDResult
     */
    public function __construct($SetDataSourcesByIDResult = null)
    {
      $this->SetDataSourcesByIDResult = $SetDataSourcesByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetDataSourcesByIDResult()
    {
      return $this->SetDataSourcesByIDResult;
    }

    /**
     * @param boolean $SetDataSourcesByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetDataSourcesByIDResponse
     */
    public function setSetDataSourcesByIDResult($SetDataSourcesByIDResult)
    {
      $this->SetDataSourcesByIDResult = $SetDataSourcesByIDResult;
      return $this;
    }

}
