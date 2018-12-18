<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\DeliveryProvider_SSP;

class StatusInfo
{

    /**
     * @var boolean $m_IsActive
     */
    protected $m_IsActive = null;

    /**
     * @var string $m_StatusMessage
     */
    protected $m_StatusMessage = null;

    /**
     * @var int $m_StatusMessageID
     */
    protected $m_StatusMessageID = null;

    /**
     * @var ArrayOfProperty $m_Properties
     */
    protected $m_Properties = null;

    /**
     * @param boolean $m_IsActive
     * @param int $m_StatusMessageID
     */
    public function __construct($m_IsActive = null, $m_StatusMessageID = null)
    {
      $this->m_IsActive = $m_IsActive;
      $this->m_StatusMessageID = $m_StatusMessageID;
    }

    /**
     * @return boolean
     */
    public function getM_IsActive()
    {
      return $this->m_IsActive;
    }

    /**
     * @param boolean $m_IsActive
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\DeliveryProvider_SSP\StatusInfo
     */
    public function setM_IsActive($m_IsActive)
    {
      $this->m_IsActive = $m_IsActive;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_StatusMessage()
    {
      return $this->m_StatusMessage;
    }

    /**
     * @param string $m_StatusMessage
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\DeliveryProvider_SSP\StatusInfo
     */
    public function setM_StatusMessage($m_StatusMessage)
    {
      $this->m_StatusMessage = $m_StatusMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_StatusMessageID()
    {
      return $this->m_StatusMessageID;
    }

    /**
     * @param int $m_StatusMessageID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\DeliveryProvider_SSP\StatusInfo
     */
    public function setM_StatusMessageID($m_StatusMessageID)
    {
      $this->m_StatusMessageID = $m_StatusMessageID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\DeliveryProvider_SSP\StatusInfo
     */
    public function setM_Properties($m_Properties)
    {
      $this->m_Properties = $m_Properties;
      return $this;
    }

}
