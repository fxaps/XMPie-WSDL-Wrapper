<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserGroupWS;

class RemoveUserFromGroup
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $userGroupId
     */
    protected $userGroupId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $userId
     * @param int $userGroupId
     */
    public function __construct($username = null, $password = null, $userId = null, $userGroupId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->userId = $userId;
      $this->userGroupId = $userGroupId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserGroupWS\RemoveUserFromGroup
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserGroupWS\RemoveUserFromGroup
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserGroupWS\RemoveUserFromGroup
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserGroupId()
    {
      return $this->userGroupId;
    }

    /**
     * @param int $userGroupId
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserGroupWS\RemoveUserFromGroup
     */
    public function setUserGroupId($userGroupId)
    {
      $this->userGroupId = $userGroupId;
      return $this;
    }

}
