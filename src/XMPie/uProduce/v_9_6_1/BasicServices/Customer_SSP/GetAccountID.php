<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class GetAccountID
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
     * @var string $inAccountName
     */
    protected $inAccountName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetAccountID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetAccountID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountName()
    {
      return $this->inAccountName;
    }

    /**
     * @param string $inAccountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetAccountID
     */
    public function setInAccountName($inAccountName)
    {
      $this->inAccountName = $inAccountName;
      return $this;
    }

}
