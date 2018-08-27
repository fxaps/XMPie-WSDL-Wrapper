<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetOutputParametersResponse
{

    /**
     * @var boolean $SetOutputParametersResult
     */
    protected $SetOutputParametersResult = null;

    /**
     * @param boolean $SetOutputParametersResult
     */
    public function __construct($SetOutputParametersResult = null)
    {
      $this->SetOutputParametersResult = $SetOutputParametersResult;
    }

    /**
     * @return boolean
     */
    public function getSetOutputParametersResult()
    {
      return $this->SetOutputParametersResult;
    }

    /**
     * @param boolean $SetOutputParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetOutputParametersResponse
     */
    public function setSetOutputParametersResult($SetOutputParametersResult)
    {
      $this->SetOutputParametersResult = $SetOutputParametersResult;
      return $this;
    }

}
