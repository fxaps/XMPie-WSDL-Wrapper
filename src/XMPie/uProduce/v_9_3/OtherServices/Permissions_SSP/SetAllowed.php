<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP;

class SetAllowed
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inUserID
     */
    protected $inUserID = null;

    /**
     * @var string $inResourceType
     */
    protected $inResourceType = null;

    /**
     * @var string $inResourceID
     */
    protected $inResourceID = null;

    /**
     * @var string $inActionType
     */
    protected $inActionType = null;

    /**
     * @var boolean $inIsAllowed
     */
    protected $inIsAllowed = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inUserID
     * @param string $inResourceType
     * @param string $inResourceID
     * @param string $inActionType
     * @param boolean $inIsAllowed
     */
    public function __construct($inUsername = null, $inPassword = null, $inUserID = null, $inResourceType = null, $inResourceID = null, $inActionType = null, $inIsAllowed = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inUserID = $inUserID;
      $this->inResourceType = $inResourceType;
      $this->inResourceID = $inResourceID;
      $this->inActionType = $inActionType;
      $this->inIsAllowed = $inIsAllowed;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowed
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowed
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInUserID()
    {
      return $this->inUserID;
    }

    /**
     * @param string $inUserID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowed
     */
    public function setInUserID($inUserID)
    {
      $this->inUserID = $inUserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResourceType()
    {
      return $this->inResourceType;
    }

    /**
     * @param string $inResourceType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowed
     */
    public function setInResourceType($inResourceType)
    {
      $this->inResourceType = $inResourceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResourceID()
    {
      return $this->inResourceID;
    }

    /**
     * @param string $inResourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowed
     */
    public function setInResourceID($inResourceID)
    {
      $this->inResourceID = $inResourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInActionType()
    {
      return $this->inActionType;
    }

    /**
     * @param string $inActionType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowed
     */
    public function setInActionType($inActionType)
    {
      $this->inActionType = $inActionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsAllowed()
    {
      return $this->inIsAllowed;
    }

    /**
     * @param boolean $inIsAllowed
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowed
     */
    public function setInIsAllowed($inIsAllowed)
    {
      $this->inIsAllowed = $inIsAllowed;
      return $this;
    }

}
