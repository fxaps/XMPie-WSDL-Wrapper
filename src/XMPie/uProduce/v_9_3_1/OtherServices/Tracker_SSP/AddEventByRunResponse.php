<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP;

class AddEventByRunResponse
{

    /**
     * @var boolean $AddEventByRunResult
     */
    protected $AddEventByRunResult = null;

    /**
     * @param boolean $AddEventByRunResult
     */
    public function __construct($AddEventByRunResult = null)
    {
      $this->AddEventByRunResult = $AddEventByRunResult;
    }

    /**
     * @return boolean
     */
    public function getAddEventByRunResult()
    {
      return $this->AddEventByRunResult;
    }

    /**
     * @param boolean $AddEventByRunResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventByRunResponse
     */
    public function setAddEventByRunResult($AddEventByRunResult)
    {
      $this->AddEventByRunResult = $AddEventByRunResult;
      return $this;
    }

}
