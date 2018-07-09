<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP;

class DeleteAccounts
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
     * @var ArrayOfString $inAccounts
     */
    protected $inAccounts = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inAccounts
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccounts = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccounts = $inAccounts;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\DeleteAccounts
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\DeleteAccounts
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInAccounts()
    {
      return $this->inAccounts;
    }

    /**
     * @param ArrayOfString $inAccounts
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\DeleteAccounts
     */
    public function setInAccounts($inAccounts)
    {
      $this->inAccounts = $inAccounts;
      return $this;
    }

}
