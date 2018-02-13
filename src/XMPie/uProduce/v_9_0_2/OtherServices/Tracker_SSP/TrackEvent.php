<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP;

class TrackEvent
{

    /**
     * @var string $m_Type
     */
    protected $m_Type = null;

    /**
     * @var string $m_RecipientID
     */
    protected $m_RecipientID = null;

    /**
     * @var string $m_Context
     */
    protected $m_Context = null;

    /**
     * @var XMPDateTime $m_HitDate
     */
    protected $m_HitDate = null;

    /**
     * @var ArrayOfProperty $m_Properties
     */
    protected $m_Properties = null;

    /**
     * @param XMPDateTime $m_HitDate
     */
    public function __construct($m_HitDate = null)
    {
      $this->m_HitDate = $m_HitDate;
    }

    /**
     * @return string
     */
    public function getM_Type()
    {
      return $this->m_Type;
    }

    /**
     * @param string $m_Type
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\TrackEvent
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_RecipientID()
    {
      return $this->m_RecipientID;
    }

    /**
     * @param string $m_RecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\TrackEvent
     */
    public function setM_RecipientID($m_RecipientID)
    {
      $this->m_RecipientID = $m_RecipientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Context()
    {
      return $this->m_Context;
    }

    /**
     * @param string $m_Context
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\TrackEvent
     */
    public function setM_Context($m_Context)
    {
      $this->m_Context = $m_Context;
      return $this;
    }

    /**
     * @return XMPDateTime
     */
    public function getM_HitDate()
    {
      return $this->m_HitDate;
    }

    /**
     * @param XMPDateTime $m_HitDate
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\TrackEvent
     */
    public function setM_HitDate($m_HitDate)
    {
      $this->m_HitDate = $m_HitDate;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getM_Properties()
    {
      return $this->m_Properties;
    }

    /**
     * @param ArrayOfProperty $m_Properties
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\TrackEvent
     */
    public function setM_Properties($m_Properties)
    {
      $this->m_Properties = $m_Properties;
      return $this;
    }

}
