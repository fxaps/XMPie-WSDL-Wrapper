<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Tracker_SSP;

class AddEventForRecipientsResponse
{

    /**
     * @var boolean $AddEventForRecipientsResult
     */
    protected $AddEventForRecipientsResult = null;

    /**
     * @param boolean $AddEventForRecipientsResult
     */
    public function __construct($AddEventForRecipientsResult = null)
    {
      $this->AddEventForRecipientsResult = $AddEventForRecipientsResult;
    }

    /**
     * @return boolean
     */
    public function getAddEventForRecipientsResult()
    {
      return $this->AddEventForRecipientsResult;
    }

    /**
     * @param boolean $AddEventForRecipientsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Tracker_SSP\AddEventForRecipientsResponse
     */
    public function setAddEventForRecipientsResult($AddEventForRecipientsResult)
    {
      $this->AddEventForRecipientsResult = $AddEventForRecipientsResult;
      return $this;
    }

}
