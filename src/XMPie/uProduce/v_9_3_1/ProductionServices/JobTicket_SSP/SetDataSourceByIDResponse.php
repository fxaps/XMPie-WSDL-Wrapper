<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetDataSourceByIDResponse
{

    /**
     * @var boolean $SetDataSourceByIDResult
     */
    protected $SetDataSourceByIDResult = null;

    /**
     * @param boolean $SetDataSourceByIDResult
     */
    public function __construct($SetDataSourceByIDResult = null)
    {
      $this->SetDataSourceByIDResult = $SetDataSourceByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetDataSourceByIDResult()
    {
      return $this->SetDataSourceByIDResult;
    }

    /**
     * @param boolean $SetDataSourceByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetDataSourceByIDResponse
     */
    public function setSetDataSourceByIDResult($SetDataSourceByIDResult)
    {
      $this->SetDataSourceByIDResult = $SetDataSourceByIDResult;
      return $this;
    }

}
