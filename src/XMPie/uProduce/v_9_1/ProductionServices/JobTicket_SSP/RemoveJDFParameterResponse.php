<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class RemoveJDFParameterResponse
{

    /**
     * @var boolean $RemoveJDFParameterResult
     */
    protected $RemoveJDFParameterResult = null;

    /**
     * @param boolean $RemoveJDFParameterResult
     */
    public function __construct($RemoveJDFParameterResult = null)
    {
      $this->RemoveJDFParameterResult = $RemoveJDFParameterResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveJDFParameterResult()
    {
      return $this->RemoveJDFParameterResult;
    }

    /**
     * @param boolean $RemoveJDFParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\RemoveJDFParameterResponse
     */
    public function setRemoveJDFParameterResult($RemoveJDFParameterResult)
    {
      $this->RemoveJDFParameterResult = $RemoveJDFParameterResult;
      return $this;
    }

}
