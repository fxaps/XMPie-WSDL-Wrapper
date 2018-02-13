<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class SetEmailAdorNameResponse
{

    /**
     * @var boolean $SetEmailAdorNameResult
     */
    protected $SetEmailAdorNameResult = null;

    /**
     * @param boolean $SetEmailAdorNameResult
     */
    public function __construct($SetEmailAdorNameResult = null)
    {
      $this->SetEmailAdorNameResult = $SetEmailAdorNameResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailAdorNameResult()
    {
      return $this->SetEmailAdorNameResult;
    }

    /**
     * @param boolean $SetEmailAdorNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetEmailAdorNameResponse
     */
    public function setSetEmailAdorNameResult($SetEmailAdorNameResult)
    {
      $this->SetEmailAdorNameResult = $SetEmailAdorNameResult;
      return $this;
    }

}
