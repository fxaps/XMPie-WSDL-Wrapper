<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP;

class Permission
{

    /**
     * @var string $m_ActorID
     */
    protected $m_ActorID = null;

    /**
     * @var string $m_ActorType
     */
    protected $m_ActorType = null;

    /**
     * @var string $m_ResourceID
     */
    protected $m_ResourceID = null;

    /**
     * @var string $m_ResourceType
     */
    protected $m_ResourceType = null;

    /**
     * @var string $m_ActionType
     */
    protected $m_ActionType = null;

    /**
     * @var boolean $m_IsAllowed
     */
    protected $m_IsAllowed = null;

    /**
     * @param boolean $m_IsAllowed
     */
    public function __construct($m_IsAllowed = null)
    {
      $this->m_IsAllowed = $m_IsAllowed;
    }

    /**
     * @return string
     */
    public function getM_ActorID()
    {
      return $this->m_ActorID;
    }

    /**
     * @param string $m_ActorID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\Permission
     */
    public function setM_ActorID($m_ActorID)
    {
      $this->m_ActorID = $m_ActorID;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ActorType()
    {
      return $this->m_ActorType;
    }

    /**
     * @param string $m_ActorType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\Permission
     */
    public function setM_ActorType($m_ActorType)
    {
      $this->m_ActorType = $m_ActorType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ResourceID()
    {
      return $this->m_ResourceID;
    }

    /**
     * @param string $m_ResourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\Permission
     */
    public function setM_ResourceID($m_ResourceID)
    {
      $this->m_ResourceID = $m_ResourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ResourceType()
    {
      return $this->m_ResourceType;
    }

    /**
     * @param string $m_ResourceType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\Permission
     */
    public function setM_ResourceType($m_ResourceType)
    {
      $this->m_ResourceType = $m_ResourceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ActionType()
    {
      return $this->m_ActionType;
    }

    /**
     * @param string $m_ActionType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\Permission
     */
    public function setM_ActionType($m_ActionType)
    {
      $this->m_ActionType = $m_ActionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_IsAllowed()
    {
      return $this->m_IsAllowed;
    }

    /**
     * @param boolean $m_IsAllowed
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\Permission
     */
    public function setM_IsAllowed($m_IsAllowed)
    {
      $this->m_IsAllowed = $m_IsAllowed;
      return $this;
    }

}
