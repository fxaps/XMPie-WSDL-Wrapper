<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class RemoveAllTrackingParametersResponse
{

    /**
     * @var boolean $RemoveAllTrackingParametersResult
     */
    protected $RemoveAllTrackingParametersResult = null;

    /**
     * @param boolean $RemoveAllTrackingParametersResult
     */
    public function __construct($RemoveAllTrackingParametersResult = null)
    {
      $this->RemoveAllTrackingParametersResult = $RemoveAllTrackingParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllTrackingParametersResult()
    {
      return $this->RemoveAllTrackingParametersResult;
    }

    /**
     * @param boolean $RemoveAllTrackingParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\RemoveAllTrackingParametersResponse
     */
    public function setRemoveAllTrackingParametersResult($RemoveAllTrackingParametersResult)
    {
      $this->RemoveAllTrackingParametersResult = $RemoveAllTrackingParametersResult;
      return $this;
    }

}
