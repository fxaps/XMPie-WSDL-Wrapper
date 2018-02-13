<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class RemoveJDFParametersResponse
{

    /**
     * @var boolean $RemoveJDFParametersResult
     */
    protected $RemoveJDFParametersResult = null;

    /**
     * @param boolean $RemoveJDFParametersResult
     */
    public function __construct($RemoveJDFParametersResult = null)
    {
      $this->RemoveJDFParametersResult = $RemoveJDFParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveJDFParametersResult()
    {
      return $this->RemoveJDFParametersResult;
    }

    /**
     * @param boolean $RemoveJDFParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\RemoveJDFParametersResponse
     */
    public function setRemoveJDFParametersResult($RemoveJDFParametersResult)
    {
      $this->RemoveJDFParametersResult = $RemoveJDFParametersResult;
      return $this;
    }

}
