<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ApplicationServices\Destination_SSP;

class TestNetworkPathConnectivity
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inNetworkPath
     */
    public function __construct($inUsername = null, $inPassword = null, $inNetworkPath = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inNetworkPath = $inNetworkPath;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ApplicationServices\Destination_SSP\TestNetworkPathConnectivity
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ApplicationServices\Destination_SSP\TestNetworkPathConnectivity
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ApplicationServices\Destination_SSP\TestNetworkPathConnectivity
     */
    public function setInNetworkPath($inNetworkPath)
    {
      $this->inNetworkPath = $inNetworkPath;
      return $this;
    }

}
