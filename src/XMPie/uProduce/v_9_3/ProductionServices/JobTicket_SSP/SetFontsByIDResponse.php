<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetFontsByIDResponse
{

    /**
     * @var boolean $SetFontsByIDResult
     */
    protected $SetFontsByIDResult = null;

    /**
     * @param boolean $SetFontsByIDResult
     */
    public function __construct($SetFontsByIDResult = null)
    {
      $this->SetFontsByIDResult = $SetFontsByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetFontsByIDResult()
    {
      return $this->SetFontsByIDResult;
    }

    /**
     * @param boolean $SetFontsByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetFontsByIDResponse
     */
    public function setSetFontsByIDResult($SetFontsByIDResult)
    {
      $this->SetFontsByIDResult = $SetFontsByIDResult;
      return $this;
    }

}
