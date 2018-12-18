<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetDistillJobOptionNameResponse
{

    /**
     * @var boolean $SetDistillJobOptionNameResult
     */
    protected $SetDistillJobOptionNameResult = null;

    /**
     * @param boolean $SetDistillJobOptionNameResult
     */
    public function __construct($SetDistillJobOptionNameResult = null)
    {
      $this->SetDistillJobOptionNameResult = $SetDistillJobOptionNameResult;
    }

    /**
     * @return boolean
     */
    public function getSetDistillJobOptionNameResult()
    {
      return $this->SetDistillJobOptionNameResult;
    }

    /**
     * @param boolean $SetDistillJobOptionNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetDistillJobOptionNameResponse
     */
    public function setSetDistillJobOptionNameResult($SetDistillJobOptionNameResult)
    {
      $this->SetDistillJobOptionNameResult = $SetDistillJobOptionNameResult;
      return $this;
    }

}
