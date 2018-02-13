<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class IsSecondaryRemoteCopyExistResponse
{

    /**
     * @var boolean $IsSecondaryRemoteCopyExistResult
     */
    protected $IsSecondaryRemoteCopyExistResult = null;

    /**
     * @param boolean $IsSecondaryRemoteCopyExistResult
     */
    public function __construct($IsSecondaryRemoteCopyExistResult = null)
    {
      $this->IsSecondaryRemoteCopyExistResult = $IsSecondaryRemoteCopyExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsSecondaryRemoteCopyExistResult()
    {
      return $this->IsSecondaryRemoteCopyExistResult;
    }

    /**
     * @param boolean $IsSecondaryRemoteCopyExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\IsSecondaryRemoteCopyExistResponse
     */
    public function setIsSecondaryRemoteCopyExistResult($IsSecondaryRemoteCopyExistResult)
    {
      $this->IsSecondaryRemoteCopyExistResult = $IsSecondaryRemoteCopyExistResult;
      return $this;
    }

}
