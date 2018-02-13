<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class EmailProviderInfo
{

    /**
     * @var string $m_Type
     */
    protected $m_Type = null;

    /**
     * @var string $m_AssemblyPath
     */
    protected $m_AssemblyPath = null;

    /**
     * @var string $m_ClassName
     */
    protected $m_ClassName = null;

    /**
     * @var string $m_ControlName
     */
    protected $m_ControlName = null;

    /**
     * @var ArrayOfEmailProviderParameter $m_Params
     */
    protected $m_Params = null;

    
    public function __construct()
    {
    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\EmailProviderInfo
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_AssemblyPath()
    {
      return $this->m_AssemblyPath;
    }

    /**
     * @param string $m_AssemblyPath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\EmailProviderInfo
     */
    public function setM_AssemblyPath($m_AssemblyPath)
    {
      $this->m_AssemblyPath = $m_AssemblyPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ClassName()
    {
      return $this->m_ClassName;
    }

    /**
     * @param string $m_ClassName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\EmailProviderInfo
     */
    public function setM_ClassName($m_ClassName)
    {
      $this->m_ClassName = $m_ClassName;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ControlName()
    {
      return $this->m_ControlName;
    }

    /**
     * @param string $m_ControlName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\EmailProviderInfo
     */
    public function setM_ControlName($m_ControlName)
    {
      $this->m_ControlName = $m_ControlName;
      return $this;
    }

    /**
     * @return ArrayOfEmailProviderParameter
     */
    public function getM_Params()
    {
      return $this->m_Params;
    }

    /**
     * @param ArrayOfEmailProviderParameter $m_Params
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\EmailProviderInfo
     */
    public function setM_Params($m_Params)
    {
      $this->m_Params = $m_Params;
      return $this;
    }

}
