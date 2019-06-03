<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ApplicationServices\User_SSP;

class RemoveUserToken
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
     * @var string $inToken
     */
    protected $inToken = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inToken
     */
    public function __construct($inUsername = null, $inPassword = null, $inToken = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ApplicationServices\User_SSP\RemoveUserToken
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ApplicationServices\User_SSP\RemoveUserToken
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ApplicationServices\User_SSP\RemoveUserToken
     */
    public function setInToken($inToken)
    {
      $this->inToken = $inToken;
      return $this;
    }

}
