<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\SystemManager_SSP;

class SetProxyInfo
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
     * @var ProxyInfo $inProxyInfo
     */
    protected $inProxyInfo = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ProxyInfo $inProxyInfo
     */
    public function __construct($inUsername = null, $inPassword = null, $inProxyInfo = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inProxyInfo = $inProxyInfo;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\SystemManager_SSP\SetProxyInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\SystemManager_SSP\SetProxyInfo
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ProxyInfo
     */
    public function getInProxyInfo()
    {
      return $this->inProxyInfo;
    }

    /**
     * @param ProxyInfo $inProxyInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\SystemManager_SSP\SetProxyInfo
     */
    public function setInProxyInfo($inProxyInfo)
    {
      $this->inProxyInfo = $inProxyInfo;
      return $this;
    }

}
