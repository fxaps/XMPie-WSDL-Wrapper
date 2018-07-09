<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Tracker_SSP;

class CloudTrackingInfo
{

    /**
     * @var boolean $m_Active
     */
    protected $m_Active = null;

    /**
     * @var int $m_Status
     */
    protected $m_Status = null;

    /**
     * @var string $m_StatusMessageID
     */
    protected $m_StatusMessageID = null;

    /**
     * @param boolean $m_Active
     * @param int $m_Status
     */
    public function __construct($m_Active = null, $m_Status = null)
    {
      $this->m_Active = $m_Active;
      $this->m_Status = $m_Status;
    }

    /**
     * @return boolean
     */
    public function getM_Active()
    {
      return $this->m_Active;
    }

    /**
     * @param boolean $m_Active
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Tracker_SSP\CloudTrackingInfo
     */
    public function setM_Active($m_Active)
    {
      $this->m_Active = $m_Active;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Status()
    {
      return $this->m_Status;
    }

    /**
     * @param int $m_Status
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Tracker_SSP\CloudTrackingInfo
     */
    public function setM_Status($m_Status)
    {
      $this->m_Status = $m_Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_StatusMessageID()
    {
      return $this->m_StatusMessageID;
    }

    /**
     * @param string $m_StatusMessageID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Tracker_SSP\CloudTrackingInfo
     */
    public function setM_StatusMessageID($m_StatusMessageID)
    {
      $this->m_StatusMessageID = $m_StatusMessageID;
      return $this;
    }

}
