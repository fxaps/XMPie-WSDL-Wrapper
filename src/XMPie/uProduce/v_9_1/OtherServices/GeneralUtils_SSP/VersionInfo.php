<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP;

class VersionInfo
{

    /**
     * @var string $m_BuildNumber
     */
    protected $m_BuildNumber = null;

    /**
     * @var string $m_Version
     */
    protected $m_Version = null;

    
    public function __construct()
    {
    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\VersionInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\VersionInfo
     */
    public function setM_Version($m_Version)
    {
      $this->m_Version = $m_Version;
      return $this;
    }

}
