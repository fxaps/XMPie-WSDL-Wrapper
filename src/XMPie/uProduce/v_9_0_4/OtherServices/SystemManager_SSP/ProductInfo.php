<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP;

class ProductInfo
{

    /**
     * @var string $m_Name
     */
    protected $m_Name = null;

    /**
     * @var string $m_Type
     */
    protected $m_Type = null;

    /**
     * @var string $m_BuildNumber
     */
    protected $m_BuildNumber = null;

    /**
     * @var string $m_Version
     */
    protected $m_Version = null;

    /**
     * @var string $m_LicenseKey
     */
    protected $m_LicenseKey = null;

    /**
     * @var string $m_SystemID
     */
    protected $m_SystemID = null;

    /**
     * @var string $m_APIServer
     */
    protected $m_APIServer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_Name()
    {
      return $this->m_Name;
    }

    /**
     * @param string $m_Name
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProductInfo
     */
    public function setM_Name($m_Name)
    {
      $this->m_Name = $m_Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Type()
    {
      return $this->m_Type;
    }

    /**
     * @param string $m_Type
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProductInfo
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_BuildNumber()
    {
      return $this->m_BuildNumber;
    }

    /**
     * @param string $m_BuildNumber
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProductInfo
     */
    public function setM_BuildNumber($m_BuildNumber)
    {
      $this->m_BuildNumber = $m_BuildNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Version()
    {
      return $this->m_Version;
    }

    /**
     * @param string $m_Version
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProductInfo
     */
    public function setM_Version($m_Version)
    {
      $this->m_Version = $m_Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_LicenseKey()
    {
      return $this->m_LicenseKey;
    }

    /**
     * @param string $m_LicenseKey
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProductInfo
     */
    public function setM_LicenseKey($m_LicenseKey)
    {
      $this->m_LicenseKey = $m_LicenseKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_SystemID()
    {
      return $this->m_SystemID;
    }

    /**
     * @param string $m_SystemID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProductInfo
     */
    public function setM_SystemID($m_SystemID)
    {
      $this->m_SystemID = $m_SystemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_APIServer()
    {
      return $this->m_APIServer;
    }

    /**
     * @param string $m_APIServer
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\ProductInfo
     */
    public function setM_APIServer($m_APIServer)
    {
      $this->m_APIServer = $m_APIServer;
      return $this;
    }

}
