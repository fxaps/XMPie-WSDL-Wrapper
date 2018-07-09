<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class SetJDFParametersResponse
{

    /**
     * @var boolean $SetJDFParametersResult
     */
    protected $SetJDFParametersResult = null;

    /**
     * @param boolean $SetJDFParametersResult
     */
    public function __construct($SetJDFParametersResult = null)
    {
      $this->SetJDFParametersResult = $SetJDFParametersResult;
    }

    /**
     * @return boolean
     */
    public function getSetJDFParametersResult()
    {
      return $this->SetJDFParametersResult;
    }

    /**
     * @param boolean $SetJDFParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetJDFParametersResponse
     */
    public function setSetJDFParametersResult($SetJDFParametersResult)
    {
      $this->SetJDFParametersResult = $SetJDFParametersResult;
      return $this;
    }

}
