<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class AddPrintByIDResponse
{

    /**
     * @var boolean $AddPrintByIDResult
     */
    protected $AddPrintByIDResult = null;

    /**
     * @param boolean $AddPrintByIDResult
     */
    public function __construct($AddPrintByIDResult = null)
    {
      $this->AddPrintByIDResult = $AddPrintByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddPrintByIDResult()
    {
      return $this->AddPrintByIDResult;
    }

    /**
     * @param boolean $AddPrintByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddPrintByIDResponse
     */
    public function setAddPrintByIDResult($AddPrintByIDResult)
    {
      $this->AddPrintByIDResult = $AddPrintByIDResult;
      return $this;
    }

}
