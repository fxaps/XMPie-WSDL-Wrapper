<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class RemoveSecondaryRemoteCopyResponse
{

    /**
     * @var boolean $RemoveSecondaryRemoteCopyResult
     */
    protected $RemoveSecondaryRemoteCopyResult = null;

    /**
     * @param boolean $RemoveSecondaryRemoteCopyResult
     */
    public function __construct($RemoveSecondaryRemoteCopyResult = null)
    {
      $this->RemoveSecondaryRemoteCopyResult = $RemoveSecondaryRemoteCopyResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveSecondaryRemoteCopyResult()
    {
      return $this->RemoveSecondaryRemoteCopyResult;
    }

    /**
     * @param boolean $RemoveSecondaryRemoteCopyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\RemoveSecondaryRemoteCopyResponse
     */
    public function setRemoveSecondaryRemoteCopyResult($RemoveSecondaryRemoteCopyResult)
    {
      $this->RemoveSecondaryRemoteCopyResult = $RemoveSecondaryRemoteCopyResult;
      return $this;
    }

}
