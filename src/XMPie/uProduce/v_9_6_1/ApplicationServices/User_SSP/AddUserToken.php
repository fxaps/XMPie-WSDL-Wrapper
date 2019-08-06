<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\User_SSP;

class AddUserToken
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
     * @var string $inToken
     */
    protected $inToken = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inUserID
     * @param string $inToken
     */
    public function __construct($inUsername = null, $inPassword = null, $inUserID = null, $inToken = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inUserID = $inUserID;
      $this->inToken = $inToken;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\User_SSP\AddUserToken
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\User_SSP\AddUserToken
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\User_SSP\AddUserToken
     */
    public function setInUserID($inUserID)
    {
      $this->inUserID = $inUserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInToken()
    {
      return $this->inToken;
    }

    /**
     * @param string $inToken
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\User_SSP\AddUserToken
     */
    public function setInToken($inToken)
    {
      $this->inToken = $inToken;
      return $this;
    }

}
