<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class RemoveJobParametersResponse
{

    /**
     * @var boolean $RemoveJobParametersResult
     */
    protected $RemoveJobParametersResult = null;

    /**
     * @param boolean $RemoveJobParametersResult
     */
    public function __construct($RemoveJobParametersResult = null)
    {
      $this->RemoveJobParametersResult = $RemoveJobParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveJobParametersResult()
    {
      return $this->RemoveJobParametersResult;
    }

    /**
     * @param boolean $RemoveJobParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\RemoveJobParametersResponse
     */
    public function setRemoveJobParametersResult($RemoveJobParametersResult)
    {
      $this->RemoveJobParametersResult = $RemoveJobParametersResult;
      return $this;
    }

}
