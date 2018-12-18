<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class IsRemoteCopyExistResponse
{

    /**
     * @var boolean $IsRemoteCopyExistResult
     */
    protected $IsRemoteCopyExistResult = null;

    /**
     * @param boolean $IsRemoteCopyExistResult
     */
    public function __construct($IsRemoteCopyExistResult = null)
    {
      $this->IsRemoteCopyExistResult = $IsRemoteCopyExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsRemoteCopyExistResult()
    {
      return $this->IsRemoteCopyExistResult;
    }

    /**
     * @param boolean $IsRemoteCopyExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\IsRemoteCopyExistResponse
     */
    public function setIsRemoteCopyExistResult($IsRemoteCopyExistResult)
    {
      $this->IsRemoteCopyExistResult = $IsRemoteCopyExistResult;
      return $this;
    }

}
