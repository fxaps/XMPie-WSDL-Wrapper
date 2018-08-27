<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP;

class SetAllowedList
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
     * @var ArrayOfPermission $inPermissionArray
     */
    protected $inPermissionArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfPermission $inPermissionArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inPermissionArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPermissionArray = $inPermissionArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowedList
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowedList
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfPermission
     */
    public function getInPermissionArray()
    {
      return $this->inPermissionArray;
    }

    /**
     * @param ArrayOfPermission $inPermissionArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\SetAllowedList
     */
    public function setInPermissionArray($inPermissionArray)
    {
      $this->inPermissionArray = $inPermissionArray;
      return $this;
    }

}
