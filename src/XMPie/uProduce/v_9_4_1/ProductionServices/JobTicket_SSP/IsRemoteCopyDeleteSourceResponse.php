<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class IsRemoteCopyDeleteSourceResponse
{

    /**
     * @var boolean $IsRemoteCopyDeleteSourceResult
     */
    protected $IsRemoteCopyDeleteSourceResult = null;

    /**
     * @param boolean $IsRemoteCopyDeleteSourceResult
     */
    public function __construct($IsRemoteCopyDeleteSourceResult = null)
    {
      $this->IsRemoteCopyDeleteSourceResult = $IsRemoteCopyDeleteSourceResult;
    }

    /**
     * @return boolean
     */
    public function getIsRemoteCopyDeleteSourceResult()
    {
      return $this->IsRemoteCopyDeleteSourceResult;
    }

    /**
     * @param boolean $IsRemoteCopyDeleteSourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\IsRemoteCopyDeleteSourceResponse
     */
    public function setIsRemoteCopyDeleteSourceResult($IsRemoteCopyDeleteSourceResult)
    {
      $this->IsRemoteCopyDeleteSourceResult = $IsRemoteCopyDeleteSourceResult;
      return $this;
    }

}
