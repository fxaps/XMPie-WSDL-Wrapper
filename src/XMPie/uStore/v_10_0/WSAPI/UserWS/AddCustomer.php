<?php

namespace XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\UserWS;

class AddCustomer
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
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $userPassword
     */
    protected $userPassword = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $userPassword
     * @param string $externalId
     */
    public function __construct($username = null, $password = null, $firstName = null, $lastName = null, $email = null, $userPassword = null, $externalId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->userPassword = $userPassword;
      $this->externalId = $externalId;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\UserWS\AddCustomer
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\UserWS\AddCustomer
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\UserWS\AddCustomer
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\UserWS\AddCustomer
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\UserWS\AddCustomer
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
      return $this->userPassword;
    }

    /**
     * @param string $userPassword
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\UserWS\AddCustomer
     */
    public function setUserPassword($userPassword)
    {
      $this->userPassword = $userPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\UserWS\AddCustomer
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
