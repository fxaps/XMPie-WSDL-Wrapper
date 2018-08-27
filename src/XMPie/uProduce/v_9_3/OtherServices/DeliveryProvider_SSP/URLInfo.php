<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP;

class URLInfo
{

    /**
     * @var string $m_ProxyServer
     */
    protected $m_ProxyServer = null;

    /**
     * @var int $m_ProxyPort
     */
    protected $m_ProxyPort = null;

    /**
     * @var string $m_BaseURL
     */
    protected $m_BaseURL = null;

    /**
     * @var string $m_Charset
     */
    protected $m_Charset = null;

    /**
     * @param int $m_ProxyPort
     */
    public function __construct($m_ProxyPort = null)
    {
      $this->m_ProxyPort = $m_ProxyPort;
    }

    /**
     * @return string
     */
    public function getM_ProxyServer()
    {
      return $this->m_ProxyServer;
    }

    /**
     * @param string $m_ProxyServer
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\URLInfo
     */
    public function setM_ProxyServer($m_ProxyServer)
    {
      $this->m_ProxyServer = $m_ProxyServer;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_ProxyPort()
    {
      return $this->m_ProxyPort;
    }

    /**
     * @param int $m_ProxyPort
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\URLInfo
     */
    public function setM_ProxyPort($m_ProxyPort)
    {
      $this->m_ProxyPort = $m_ProxyPort;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_BaseURL()
    {
      return $this->m_BaseURL;
    }

    /**
     * @param string $m_BaseURL
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\URLInfo
     */
    public function setM_BaseURL($m_BaseURL)
    {
      $this->m_BaseURL = $m_BaseURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Charset()
    {
      return $this->m_Charset;
    }

    /**
     * @param string $m_Charset
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\URLInfo
     */
    public function setM_Charset($m_Charset)
    {
      $this->m_Charset = $m_Charset;
      return $this;
    }

}
