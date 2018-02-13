<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class RemoveTrackingResponse
{

    /**
     * @var boolean $RemoveTrackingResult
     */
    protected $RemoveTrackingResult = null;

    /**
     * @param boolean $RemoveTrackingResult
     */
    public function __construct($RemoveTrackingResult = null)
    {
      $this->RemoveTrackingResult = $RemoveTrackingResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveTrackingResult()
    {
      return $this->RemoveTrackingResult;
    }

    /**
     * @param boolean $RemoveTrackingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\RemoveTrackingResponse
     */
    public function setRemoveTrackingResult($RemoveTrackingResult)
    {
      $this->RemoveTrackingResult = $RemoveTrackingResult;
      return $this;
    }

}
