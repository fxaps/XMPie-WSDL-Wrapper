<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class IsJDFExistResponse
{

    /**
     * @var boolean $IsJDFExistResult
     */
    protected $IsJDFExistResult = null;

    /**
     * @param boolean $IsJDFExistResult
     */
    public function __construct($IsJDFExistResult = null)
    {
      $this->IsJDFExistResult = $IsJDFExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsJDFExistResult()
    {
      return $this->IsJDFExistResult;
    }

    /**
     * @param boolean $IsJDFExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\IsJDFExistResponse
     */
    public function setIsJDFExistResult($IsJDFExistResult)
    {
      $this->IsJDFExistResult = $IsJDFExistResult;
      return $this;
    }

}
