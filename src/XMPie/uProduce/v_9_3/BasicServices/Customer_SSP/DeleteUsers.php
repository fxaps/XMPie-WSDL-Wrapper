<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP;

class DeleteUsers
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
     * @var ArrayOfString $inUserIDArray
     */
    protected $inUserIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inUserIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inUserIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inUserIDArray = $inUserIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP\DeleteUsers
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP\DeleteUsers
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInUserIDArray()
    {
      return $this->inUserIDArray;
    }

    /**
     * @param ArrayOfString $inUserIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP\DeleteUsers
     */
    public function setInUserIDArray($inUserIDArray)
    {
      $this->inUserIDArray = $inUserIDArray;
      return $this;
    }

}
