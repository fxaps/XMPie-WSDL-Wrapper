<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP;

class DeleteCustomButtons
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
     * @var ArrayOfString $inCustomButtonIDArray
     */
    protected $inCustomButtonIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inCustomButtonIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inCustomButtonIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCustomButtonIDArray = $inCustomButtonIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\DeleteCustomButtons
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\DeleteCustomButtons
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInCustomButtonIDArray()
    {
      return $this->inCustomButtonIDArray;
    }

    /**
     * @param ArrayOfString $inCustomButtonIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\DeleteCustomButtons
     */
    public function setInCustomButtonIDArray($inCustomButtonIDArray)
    {
      $this->inCustomButtonIDArray = $inCustomButtonIDArray;
      return $this;
    }

}
