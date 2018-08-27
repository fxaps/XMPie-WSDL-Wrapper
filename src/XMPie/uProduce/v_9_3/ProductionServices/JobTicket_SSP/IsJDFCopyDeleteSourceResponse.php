<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class IsJDFCopyDeleteSourceResponse
{

    /**
     * @var boolean $IsJDFCopyDeleteSourceResult
     */
    protected $IsJDFCopyDeleteSourceResult = null;

    /**
     * @param boolean $IsJDFCopyDeleteSourceResult
     */
    public function __construct($IsJDFCopyDeleteSourceResult = null)
    {
      $this->IsJDFCopyDeleteSourceResult = $IsJDFCopyDeleteSourceResult;
    }

    /**
     * @return boolean
     */
    public function getIsJDFCopyDeleteSourceResult()
    {
      return $this->IsJDFCopyDeleteSourceResult;
    }

    /**
     * @param boolean $IsJDFCopyDeleteSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\IsJDFCopyDeleteSourceResponse
     */
    public function setIsJDFCopyDeleteSourceResult($IsJDFCopyDeleteSourceResult)
    {
      $this->IsJDFCopyDeleteSourceResult = $IsJDFCopyDeleteSourceResult;
      return $this;
    }

}
