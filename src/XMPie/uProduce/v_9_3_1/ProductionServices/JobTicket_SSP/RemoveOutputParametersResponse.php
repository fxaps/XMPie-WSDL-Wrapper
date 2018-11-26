<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class RemoveOutputParametersResponse
{

    /**
     * @var boolean $RemoveOutputParametersResult
     */
    protected $RemoveOutputParametersResult = null;

    /**
     * @param boolean $RemoveOutputParametersResult
     */
    public function __construct($RemoveOutputParametersResult = null)
    {
      $this->RemoveOutputParametersResult = $RemoveOutputParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveOutputParametersResult()
    {
      return $this->RemoveOutputParametersResult;
    }

    /**
     * @param boolean $RemoveOutputParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\RemoveOutputParametersResponse
     */
    public function setRemoveOutputParametersResult($RemoveOutputParametersResult)
    {
      $this->RemoveOutputParametersResult = $RemoveOutputParametersResult;
      return $this;
    }

}
