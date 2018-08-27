<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetOutputParameterResponse
{

    /**
     * @var boolean $SetOutputParameterResult
     */
    protected $SetOutputParameterResult = null;

    /**
     * @param boolean $SetOutputParameterResult
     */
    public function __construct($SetOutputParameterResult = null)
    {
      $this->SetOutputParameterResult = $SetOutputParameterResult;
    }

    /**
     * @return boolean
     */
    public function getSetOutputParameterResult()
    {
      return $this->SetOutputParameterResult;
    }

    /**
     * @param boolean $SetOutputParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetOutputParameterResponse
     */
    public function setSetOutputParameterResult($SetOutputParameterResult)
    {
      $this->SetOutputParameterResult = $SetOutputParameterResult;
      return $this;
    }

}
