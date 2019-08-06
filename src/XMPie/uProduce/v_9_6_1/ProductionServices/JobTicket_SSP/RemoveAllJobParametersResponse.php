<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class RemoveAllJobParametersResponse
{

    /**
     * @var boolean $RemoveAllJobParametersResult
     */
    protected $RemoveAllJobParametersResult = null;

    /**
     * @param boolean $RemoveAllJobParametersResult
     */
    public function __construct($RemoveAllJobParametersResult = null)
    {
      $this->RemoveAllJobParametersResult = $RemoveAllJobParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllJobParametersResult()
    {
      return $this->RemoveAllJobParametersResult;
    }

    /**
     * @param boolean $RemoveAllJobParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\RemoveAllJobParametersResponse
     */
    public function setRemoveAllJobParametersResult($RemoveAllJobParametersResult)
    {
      $this->RemoveAllJobParametersResult = $RemoveAllJobParametersResult;
      return $this;
    }

}
