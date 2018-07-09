<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SetOutputMediaResponse
{

    /**
     * @var boolean $SetOutputMediaResult
     */
    protected $SetOutputMediaResult = null;

    /**
     * @param boolean $SetOutputMediaResult
     */
    public function __construct($SetOutputMediaResult = null)
    {
      $this->SetOutputMediaResult = $SetOutputMediaResult;
    }

    /**
     * @return boolean
     */
    public function getSetOutputMediaResult()
    {
      return $this->SetOutputMediaResult;
    }

    /**
     * @param boolean $SetOutputMediaResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetOutputMediaResponse
     */
    public function setSetOutputMediaResult($SetOutputMediaResult)
    {
      $this->SetOutputMediaResult = $SetOutputMediaResult;
      return $this;
    }

}
