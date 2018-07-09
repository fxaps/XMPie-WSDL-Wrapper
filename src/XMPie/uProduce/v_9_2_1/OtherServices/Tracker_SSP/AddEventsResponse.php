<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Tracker_SSP;

class AddEventsResponse
{

    /**
     * @var boolean $AddEventsResult
     */
    protected $AddEventsResult = null;

    /**
     * @param boolean $AddEventsResult
     */
    public function __construct($AddEventsResult = null)
    {
      $this->AddEventsResult = $AddEventsResult;
    }

    /**
     * @return boolean
     */
    public function getAddEventsResult()
    {
      return $this->AddEventsResult;
    }

    /**
     * @param boolean $AddEventsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Tracker_SSP\AddEventsResponse
     */
    public function setAddEventsResult($AddEventsResult)
    {
      $this->AddEventsResult = $AddEventsResult;
      return $this;
    }

}
