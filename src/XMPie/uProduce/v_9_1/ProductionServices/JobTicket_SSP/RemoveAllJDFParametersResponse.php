<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class RemoveAllJDFParametersResponse
{

    /**
     * @var boolean $RemoveAllJDFParametersResult
     */
    protected $RemoveAllJDFParametersResult = null;

    /**
     * @param boolean $RemoveAllJDFParametersResult
     */
    public function __construct($RemoveAllJDFParametersResult = null)
    {
      $this->RemoveAllJDFParametersResult = $RemoveAllJDFParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllJDFParametersResult()
    {
      return $this->RemoveAllJDFParametersResult;
    }

    /**
     * @param boolean $RemoveAllJDFParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\RemoveAllJDFParametersResponse
     */
    public function setRemoveAllJDFParametersResult($RemoveAllJDFParametersResult)
    {
      $this->RemoveAllJDFParametersResult = $RemoveAllJDFParametersResult;
      return $this;
    }

}
