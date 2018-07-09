<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class RemoveJDFResponse
{

    /**
     * @var boolean $RemoveJDFResult
     */
    protected $RemoveJDFResult = null;

    /**
     * @param boolean $RemoveJDFResult
     */
    public function __construct($RemoveJDFResult = null)
    {
      $this->RemoveJDFResult = $RemoveJDFResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveJDFResult()
    {
      return $this->RemoveJDFResult;
    }

    /**
     * @param boolean $RemoveJDFResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\RemoveJDFResponse
     */
    public function setRemoveJDFResult($RemoveJDFResult)
    {
      $this->RemoveJDFResult = $RemoveJDFResult;
      return $this;
    }

}
