<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SetSenderAdorNameResponse
{

    /**
     * @var boolean $SetSenderAdorNameResult
     */
    protected $SetSenderAdorNameResult = null;

    /**
     * @param boolean $SetSenderAdorNameResult
     */
    public function __construct($SetSenderAdorNameResult = null)
    {
      $this->SetSenderAdorNameResult = $SetSenderAdorNameResult;
    }

    /**
     * @return boolean
     */
    public function getSetSenderAdorNameResult()
    {
      return $this->SetSenderAdorNameResult;
    }

    /**
     * @param boolean $SetSenderAdorNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetSenderAdorNameResponse
     */
    public function setSetSenderAdorNameResult($SetSenderAdorNameResult)
    {
      $this->SetSenderAdorNameResult = $SetSenderAdorNameResult;
      return $this;
    }

}
