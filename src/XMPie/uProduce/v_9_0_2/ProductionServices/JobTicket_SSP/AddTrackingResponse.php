<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class AddTrackingResponse
{

    /**
     * @var boolean $AddTrackingResult
     */
    protected $AddTrackingResult = null;

    /**
     * @param boolean $AddTrackingResult
     */
    public function __construct($AddTrackingResult = null)
    {
      $this->AddTrackingResult = $AddTrackingResult;
    }

    /**
     * @return boolean
     */
    public function getAddTrackingResult()
    {
      return $this->AddTrackingResult;
    }

    /**
     * @param boolean $AddTrackingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\AddTrackingResponse
     */
    public function setAddTrackingResult($AddTrackingResult)
    {
      $this->AddTrackingResult = $AddTrackingResult;
      return $this;
    }

}
