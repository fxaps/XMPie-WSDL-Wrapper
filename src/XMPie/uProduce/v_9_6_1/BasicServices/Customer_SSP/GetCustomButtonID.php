<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class GetCustomButtonID
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
     * @var string $inCustomButtonName
     */
    protected $inCustomButtonName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCustomButtonName
     */
    public function __construct($inUsername = null, $inPassword = null, $inCustomButtonName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCustomButtonName = $inCustomButtonName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetCustomButtonID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetCustomButtonID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCustomButtonName()
    {
      return $this->inCustomButtonName;
    }

    /**
     * @param string $inCustomButtonName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetCustomButtonID
     */
    public function setInCustomButtonName($inCustomButtonName)
    {
      $this->inCustomButtonName = $inCustomButtonName;
      return $this;
    }

}
