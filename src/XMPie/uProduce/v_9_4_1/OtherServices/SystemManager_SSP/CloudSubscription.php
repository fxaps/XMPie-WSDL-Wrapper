<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\SystemManager_SSP;

class CloudSubscription
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var guid $ID
     */
    protected $ID = null;

    /**
     * @var boolean $IsAllowed
     */
    protected $IsAllowed = null;

    /**
     * @param guid $ID
     * @param boolean $IsAllowed
     */
    public function __construct($ID = null, $IsAllowed = null)
    {
      $this->ID = $ID;
      $this->IsAllowed = $IsAllowed;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\SystemManager_SSP\CloudSubscription
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return guid
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param guid $ID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\SystemManager_SSP\CloudSubscription
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllowed()
    {
      return $this->IsAllowed;
    }

    /**
     * @param boolean $IsAllowed
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\SystemManager_SSP\CloudSubscription
     */
    public function setIsAllowed($IsAllowed)
    {
      $this->IsAllowed = $IsAllowed;
      return $this;
    }

}
