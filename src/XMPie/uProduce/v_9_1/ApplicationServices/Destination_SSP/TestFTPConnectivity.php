<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP;

class TestFTPConnectivity
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
     * @var string $inAddress
     */
    protected $inAddress = null;

    /**
     * @var string $inUser
     */
    protected $inUser = null;

    /**
     * @var string $inPass
     */
    protected $inPass = null;

    /**
     * @var int $inPort
     */
    protected $inPort = null;

    /**
     * @var boolean $inIsPassive
     */
    protected $inIsPassive = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAddress
     * @param string $inUser
     * @param string $inPass
     * @param int $inPort
     * @param boolean $inIsPassive
     */
    public function __construct($inUsername = null, $inPassword = null, $inAddress = null, $inUser = null, $inPass = null, $inPort = null, $inIsPassive = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAddress = $inAddress;
      $this->inUser = $inUser;
      $this->inPass = $inPass;
      $this->inPort = $inPort;
      $this->inIsPassive = $inIsPassive;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\TestFTPConnectivity
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\TestFTPConnectivity
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAddress()
    {
      return $this->inAddress;
    }

    /**
     * @param string $inAddress
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\TestFTPConnectivity
     */
    public function setInAddress($inAddress)
    {
      $this->inAddress = $inAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getInUser()
    {
      return $this->inUser;
    }

    /**
     * @param string $inUser
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\TestFTPConnectivity
     */
    public function setInUser($inUser)
    {
      $this->inUser = $inUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPass()
    {
      return $this->inPass;
    }

    /**
     * @param string $inPass
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\TestFTPConnectivity
     */
    public function setInPass($inPass)
    {
      $this->inPass = $inPass;
      return $this;
    }

    /**
     * @return int
     */
    public function getInPort()
    {
      return $this->inPort;
    }

    /**
     * @param int $inPort
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\TestFTPConnectivity
     */
    public function setInPort($inPort)
    {
      $this->inPort = $inPort;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsPassive()
    {
      return $this->inIsPassive;
    }

    /**
     * @param boolean $inIsPassive
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\TestFTPConnectivity
     */
    public function setInIsPassive($inIsPassive)
    {
      $this->inIsPassive = $inIsPassive;
      return $this;
    }

}
