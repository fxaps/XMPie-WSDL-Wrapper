<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class AssetSourceStruct
{

    /**
     * @var string $m_Params
     */
    protected $m_Params = null;

    /**
     * @var string $m_ObjectName
     */
    protected $m_ObjectName = null;

    /**
     * @var string $m_ProdObjectName
     */
    protected $m_ProdObjectName = null;

    /**
     * @var string $m_DllName
     */
    protected $m_DllName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_Params()
    {
      return $this->m_Params;
    }

    /**
     * @param string $m_Params
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AssetSourceStruct
     */
    public function setM_Params($m_Params)
    {
      $this->m_Params = $m_Params;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ObjectName()
    {
      return $this->m_ObjectName;
    }

    /**
     * @param string $m_ObjectName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AssetSourceStruct
     */
    public function setM_ObjectName($m_ObjectName)
    {
      $this->m_ObjectName = $m_ObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ProdObjectName()
    {
      return $this->m_ProdObjectName;
    }

    /**
     * @param string $m_ProdObjectName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AssetSourceStruct
     */
    public function setM_ProdObjectName($m_ProdObjectName)
    {
      $this->m_ProdObjectName = $m_ProdObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_DllName()
    {
      return $this->m_DllName;
    }

    /**
     * @param string $m_DllName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AssetSourceStruct
     */
    public function setM_DllName($m_DllName)
    {
      $this->m_DllName = $m_DllName;
      return $this;
    }

}
