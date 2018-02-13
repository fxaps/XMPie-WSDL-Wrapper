<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP;

class ProxyInfo
{

    /**
     * @var boolean $m_HttpProxyEnabled
     */
    protected $m_HttpProxyEnabled = null;

    /**
     * @var boolean $m_HttpsProxyEnabled
     */
    protected $m_HttpsProxyEnabled = null;

    /**
     * @var string $m_HttpServer
     */
    protected $m_HttpServer = null;

    /**
     * @var string $m_HttpsServer
     */
    protected $m_HttpsServer = null;

    /**
     * @var string $m_FtpServer
     */
    protected $m_FtpServer = null;

    /**
     * @var int $m_HttpPort
     */
    protected $m_HttpPort = null;

    /**
     * @var int $m_HttpsPort
     */
    protected $m_HttpsPort = null;

    /**
     * @var int $m_FtpPort
     */
    protected $m_FtpPort = null;

    /**
     * @var string $m_HttpUserName
     */
    protected $m_HttpUserName = null;

    /**
     * @var boolean $m_HttpPasswordIsAvailable
     */
    protected $m_HttpPasswordIsAvailable = null;

    /**
     * @var string $m_HttpPassword
     */
    protected $m_HttpPassword = null;

    /**
     * @var string $m_HttpsUserName
     */
    protected $m_HttpsUserName = null;

    /**
     * @var boolean $m_HttpsPasswordIsAvailable
     */
    protected $m_HttpsPasswordIsAvailable = null;

    /**
     * @var string $m_HttpsPassword
     */
    protected $m_HttpsPassword = null;

    /**
     * @param boolean $m_HttpProxyEnabled
     * @param boolean $m_HttpsProxyEnabled
     * @param int $m_HttpPort
     * @param int $m_HttpsPort
     * @param int $m_FtpPort
     * @param boolean $m_HttpPasswordIsAvailable
     * @param boolean $m_HttpsPasswordIsAvailable
     */
    public function __construct($m_HttpProxyEnabled = null, $m_HttpsProxyEnabled = null, $m_HttpPort = null, $m_HttpsPort = null, $m_FtpPort = null, $m_HttpPasswordIsAvailable = null, $m_HttpsPasswordIsAvailable = null)
    {
      $this->m_HttpProxyEnabled = $m_HttpProxyEnabled;
      $this->m_HttpsProxyEnabled = $m_HttpsProxyEnabled;
      $this->m_HttpPort = $m_HttpPort;
      $this->m_HttpsPort = $m_HttpsPort;
      $this->m_FtpPort = $m_FtpPort;
      $this->m_HttpPasswordIsAvailable = $m_HttpPasswordIsAvailable;
      $this->m_HttpsPasswordIsAvailable = $m_HttpsPasswordIsAvailable;
    }

    /**
     * @return boolean
     */
    public function getM_HttpProxyEnabled()
    {
      return $this->m_HttpProxyEnabled;
    }

    /**
     * @param boolean $m_HttpProxyEnabled
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpProxyEnabled($m_HttpProxyEnabled)
    {
      $this->m_HttpProxyEnabled = $m_HttpProxyEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_HttpsProxyEnabled()
    {
      return $this->m_HttpsProxyEnabled;
    }

    /**
     * @param boolean $m_HttpsProxyEnabled
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpsProxyEnabled($m_HttpsProxyEnabled)
    {
      $this->m_HttpsProxyEnabled = $m_HttpsProxyEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_HttpServer()
    {
      return $this->m_HttpServer;
    }

    /**
     * @param string $m_HttpServer
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpServer($m_HttpServer)
    {
      $this->m_HttpServer = $m_HttpServer;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_HttpsServer()
    {
      return $this->m_HttpsServer;
    }

    /**
     * @param string $m_HttpsServer
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpsServer($m_HttpsServer)
    {
      $this->m_HttpsServer = $m_HttpsServer;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_FtpServer()
    {
      return $this->m_FtpServer;
    }

    /**
     * @param string $m_FtpServer
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_FtpServer($m_FtpServer)
    {
      $this->m_FtpServer = $m_FtpServer;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_HttpPort()
    {
      return $this->m_HttpPort;
    }

    /**
     * @param int $m_HttpPort
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpPort($m_HttpPort)
    {
      $this->m_HttpPort = $m_HttpPort;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_HttpsPort()
    {
      return $this->m_HttpsPort;
    }

    /**
     * @param int $m_HttpsPort
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpsPort($m_HttpsPort)
    {
      $this->m_HttpsPort = $m_HttpsPort;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_FtpPort()
    {
      return $this->m_FtpPort;
    }

    /**
     * @param int $m_FtpPort
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_FtpPort($m_FtpPort)
    {
      $this->m_FtpPort = $m_FtpPort;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_HttpUserName()
    {
      return $this->m_HttpUserName;
    }

    /**
     * @param string $m_HttpUserName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpUserName($m_HttpUserName)
    {
      $this->m_HttpUserName = $m_HttpUserName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_HttpPasswordIsAvailable()
    {
      return $this->m_HttpPasswordIsAvailable;
    }

    /**
     * @param boolean $m_HttpPasswordIsAvailable
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpPasswordIsAvailable($m_HttpPasswordIsAvailable)
    {
      $this->m_HttpPasswordIsAvailable = $m_HttpPasswordIsAvailable;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_HttpPassword()
    {
      return $this->m_HttpPassword;
    }

    /**
     * @param string $m_HttpPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpPassword($m_HttpPassword)
    {
      $this->m_HttpPassword = $m_HttpPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_HttpsUserName()
    {
      return $this->m_HttpsUserName;
    }

    /**
     * @param string $m_HttpsUserName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpsUserName($m_HttpsUserName)
    {
      $this->m_HttpsUserName = $m_HttpsUserName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_HttpsPasswordIsAvailable()
    {
      return $this->m_HttpsPasswordIsAvailable;
    }

    /**
     * @param boolean $m_HttpsPasswordIsAvailable
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpsPasswordIsAvailable($m_HttpsPasswordIsAvailable)
    {
      $this->m_HttpsPasswordIsAvailable = $m_HttpsPasswordIsAvailable;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_HttpsPassword()
    {
      return $this->m_HttpsPassword;
    }

    /**
     * @param string $m_HttpsPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProxyInfo
     */
    public function setM_HttpsPassword($m_HttpsPassword)
    {
      $this->m_HttpsPassword = $m_HttpsPassword;
      return $this;
    }

}
