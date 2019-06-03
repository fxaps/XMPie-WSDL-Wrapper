<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class RemoveAllOutputParametersResponse
{

    /**
     * @var boolean $RemoveAllOutputParametersResult
     */
    protected $RemoveAllOutputParametersResult = null;

    /**
     * @param boolean $RemoveAllOutputParametersResult
     */
    public function __construct($RemoveAllOutputParametersResult = null)
    {
      $this->RemoveAllOutputParametersResult = $RemoveAllOutputParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllOutputParametersResult()
    {
      return $this->RemoveAllOutputParametersResult;
    }

    /**
     * @param boolean $RemoveAllOutputParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\RemoveAllOutputParametersResponse
     */
    public function setRemoveAllOutputParametersResult($RemoveAllOutputParametersResult)
    {
      $this->RemoveAllOutputParametersResult = $RemoveAllOutputParametersResult;
      return $this;
    }

}
