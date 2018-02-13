<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP;

class DeleteDestinations
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
     * @var ArrayOfString $inDestinationIDArray
     */
    protected $inDestinationIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inDestinationIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inDestinationIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDestinationIDArray = $inDestinationIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteDestinations
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteDestinations
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDestinationIDArray()
    {
      return $this->inDestinationIDArray;
    }

    /**
     * @param ArrayOfString $inDestinationIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteDestinations
     */
    public function setInDestinationIDArray($inDestinationIDArray)
    {
      $this->inDestinationIDArray = $inDestinationIDArray;
      return $this;
    }

}
