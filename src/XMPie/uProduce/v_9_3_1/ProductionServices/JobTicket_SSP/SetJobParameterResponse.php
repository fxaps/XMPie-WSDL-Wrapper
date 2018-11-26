<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetJobParameterResponse
{

    /**
     * @var boolean $SetJobParameterResult
     */
    protected $SetJobParameterResult = null;

    /**
     * @param boolean $SetJobParameterResult
     */
    public function __construct($SetJobParameterResult = null)
    {
      $this->SetJobParameterResult = $SetJobParameterResult;
    }

    /**
     * @return boolean
     */
    public function getSetJobParameterResult()
    {
      return $this->SetJobParameterResult;
    }

    /**
     * @param boolean $SetJobParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetJobParameterResponse
     */
    public function setSetJobParameterResult($SetJobParameterResult)
    {
      $this->SetJobParameterResult = $SetJobParameterResult;
      return $this;
    }

}
