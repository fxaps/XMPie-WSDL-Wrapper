<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetJobParametersResponse
{

    /**
     * @var boolean $SetJobParametersResult
     */
    protected $SetJobParametersResult = null;

    /**
     * @param boolean $SetJobParametersResult
     */
    public function __construct($SetJobParametersResult = null)
    {
      $this->SetJobParametersResult = $SetJobParametersResult;
    }

    /**
     * @return boolean
     */
    public function getSetJobParametersResult()
    {
      return $this->SetJobParametersResult;
    }

    /**
     * @param boolean $SetJobParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetJobParametersResponse
     */
    public function setSetJobParametersResult($SetJobParametersResult)
    {
      $this->SetJobParametersResult = $SetJobParametersResult;
      return $this;
    }

}
