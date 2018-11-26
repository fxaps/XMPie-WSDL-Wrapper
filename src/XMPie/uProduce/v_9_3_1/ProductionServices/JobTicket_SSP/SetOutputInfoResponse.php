<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetOutputInfoResponse
{

    /**
     * @var boolean $SetOutputInfoResult
     */
    protected $SetOutputInfoResult = null;

    /**
     * @param boolean $SetOutputInfoResult
     */
    public function __construct($SetOutputInfoResult = null)
    {
      $this->SetOutputInfoResult = $SetOutputInfoResult;
    }

    /**
     * @return boolean
     */
    public function getSetOutputInfoResult()
    {
      return $this->SetOutputInfoResult;
    }

    /**
     * @param boolean $SetOutputInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetOutputInfoResponse
     */
    public function setSetOutputInfoResult($SetOutputInfoResult)
    {
      $this->SetOutputInfoResult = $SetOutputInfoResult;
      return $this;
    }

}
