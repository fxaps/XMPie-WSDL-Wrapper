<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class RemoveJobParameterResponse
{

    /**
     * @var boolean $RemoveJobParameterResult
     */
    protected $RemoveJobParameterResult = null;

    /**
     * @param boolean $RemoveJobParameterResult
     */
    public function __construct($RemoveJobParameterResult = null)
    {
      $this->RemoveJobParameterResult = $RemoveJobParameterResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveJobParameterResult()
    {
      return $this->RemoveJobParameterResult;
    }

    /**
     * @param boolean $RemoveJobParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\RemoveJobParameterResponse
     */
    public function setRemoveJobParameterResult($RemoveJobParameterResult)
    {
      $this->RemoveJobParameterResult = $RemoveJobParameterResult;
      return $this;
    }

}
