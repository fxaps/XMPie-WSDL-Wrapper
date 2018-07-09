<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class IsTrackingADORResponse
{

    /**
     * @var boolean $IsTrackingADORResult
     */
    protected $IsTrackingADORResult = null;

    /**
     * @param boolean $IsTrackingADORResult
     */
    public function __construct($IsTrackingADORResult = null)
    {
      $this->IsTrackingADORResult = $IsTrackingADORResult;
    }

    /**
     * @return boolean
     */
    public function getIsTrackingADORResult()
    {
      return $this->IsTrackingADORResult;
    }

    /**
     * @param boolean $IsTrackingADORResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\IsTrackingADORResponse
     */
    public function setIsTrackingADORResult($IsTrackingADORResult)
    {
      $this->IsTrackingADORResult = $IsTrackingADORResult;
      return $this;
    }

}
