<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP;

class AddEventTypeResponse
{

    /**
     * @var boolean $AddEventTypeResult
     */
    protected $AddEventTypeResult = null;

    /**
     * @param boolean $AddEventTypeResult
     */
    public function __construct($AddEventTypeResult = null)
    {
      $this->AddEventTypeResult = $AddEventTypeResult;
    }

    /**
     * @return boolean
     */
    public function getAddEventTypeResult()
    {
      return $this->AddEventTypeResult;
    }

    /**
     * @param boolean $AddEventTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventTypeResponse
     */
    public function setAddEventTypeResult($AddEventTypeResult)
    {
      $this->AddEventTypeResult = $AddEventTypeResult;
      return $this;
    }

}
