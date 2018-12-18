<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class AddJDFResponse
{

    /**
     * @var boolean $AddJDFResult
     */
    protected $AddJDFResult = null;

    /**
     * @param boolean $AddJDFResult
     */
    public function __construct($AddJDFResult = null)
    {
      $this->AddJDFResult = $AddJDFResult;
    }

    /**
     * @return boolean
     */
    public function getAddJDFResult()
    {
      return $this->AddJDFResult;
    }

    /**
     * @param boolean $AddJDFResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddJDFResponse
     */
    public function setAddJDFResult($AddJDFResult)
    {
      $this->AddJDFResult = $AddJDFResult;
      return $this;
    }

}
