<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP;

class TestNetworkPathConnectivityWithCredentials
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
     * @var string $inNetworkPath
     */
    protected $inNetworkPath = null;

    /**
     * @var string $inNetworkUserName
     */
    protected $inNetworkUserName = null;

    /**
     * @var string $inNetworkDomain
     */
    protected $inNetworkDomain = null;

    /**
     * @var string $inNetworkPassword
     */
    protected $inNetworkPassword = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inNetworkPath
     * @param string $inNetworkUserName
     * @param string $inNetworkDomain
     * @param string $inNetworkPassword
     */
    public function __construct($inUsername = null, $inPassword = null, $inNetworkPath = null, $inNetworkUserName = null, $inNetworkDomain = null, $inNetworkPassword = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inNetworkPath = $inNetworkPath;
      $this->inNetworkUserName = $inNetworkUserName;
      $this->inNetworkDomain = $inNetworkDomain;
      $this->inNetworkPassword = $inNetworkPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityWithCredentials
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityWithCredentials
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInNetworkPath()
    {
      return $this->inNetworkPath;
    }

    /**
     * @param string $inNetworkPath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityWithCredentials
     */
    public function setInNetworkPath($inNetworkPath)
    {
      $this->inNetworkPath = $inNetworkPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getInNetworkUserName()
    {
      return $this->inNetworkUserName;
    }

    /**
     * @param string $inNetworkUserName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityWithCredentials
     */
    public function setInNetworkUserName($inNetworkUserName)
    {
      $this->inNetworkUserName = $inNetworkUserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInNetworkDomain()
    {
      return $this->inNetworkDomain;
    }

    /**
     * @param string $inNetworkDomain
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityWithCredentials
     */
    public function setInNetworkDomain($inNetworkDomain)
    {
      $this->inNetworkDomain = $inNetworkDomain;
      return $this;
    }

    /**
     * @return string
     */
    public function getInNetworkPassword()
    {
      return $this->inNetworkPassword;
    }

    /**
     * @param string $inNetworkPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityWithCredentials
     */
    public function setInNetworkPassword($inNetworkPassword)
    {
      $this->inNetworkPassword = $inNetworkPassword;
      return $this;
    }

}
