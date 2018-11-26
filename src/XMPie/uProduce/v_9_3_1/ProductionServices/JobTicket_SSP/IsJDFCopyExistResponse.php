<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class IsJDFCopyExistResponse
{

    /**
     * @var boolean $IsJDFCopyExistResult
     */
    protected $IsJDFCopyExistResult = null;

    /**
     * @param boolean $IsJDFCopyExistResult
     */
    public function __construct($IsJDFCopyExistResult = null)
    {
      $this->IsJDFCopyExistResult = $IsJDFCopyExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsJDFCopyExistResult()
    {
      return $this->IsJDFCopyExistResult;
    }

    /**
     * @param boolean $IsJDFCopyExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\IsJDFCopyExistResponse
     */
    public function setIsJDFCopyExistResult($IsJDFCopyExistResult)
    {
      $this->IsJDFCopyExistResult = $IsJDFCopyExistResult;
      return $this;
    }

}
