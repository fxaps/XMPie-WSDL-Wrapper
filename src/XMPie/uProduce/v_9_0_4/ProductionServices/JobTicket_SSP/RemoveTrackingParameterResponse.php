<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class RemoveTrackingParameterResponse
{

    /**
     * @var boolean $RemoveTrackingParameterResult
     */
    protected $RemoveTrackingParameterResult = null;

    /**
     * @param boolean $RemoveTrackingParameterResult
     */
    public function __construct($RemoveTrackingParameterResult = null)
    {
      $this->RemoveTrackingParameterResult = $RemoveTrackingParameterResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveTrackingParameterResult()
    {
      return $this->RemoveTrackingParameterResult;
    }

    /**
     * @param boolean $RemoveTrackingParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\RemoveTrackingParameterResponse
     */
    public function setRemoveTrackingParameterResult($RemoveTrackingParameterResult)
    {
      $this->RemoveTrackingParameterResult = $RemoveTrackingParameterResult;
      return $this;
    }

}
