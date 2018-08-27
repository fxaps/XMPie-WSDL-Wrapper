<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class Connection
{

    /**
     * @var string $m_Type
     */
    protected $m_Type = null;

    /**
     * @var string $m_ConnectionString
     */
    protected $m_ConnectionString = null;

    /**
     * @var string $m_AdditionalInfo
     */
    protected $m_AdditionalInfo = null;

    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\Connection
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ConnectionString()
    {
      return $this->m_ConnectionString;
    }

    /**
     * @param string $m_ConnectionString
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\Connection
     */
    public function setM_ConnectionString($m_ConnectionString)
    {
      $this->m_ConnectionString = $m_ConnectionString;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_AdditionalInfo()
    {
      return $this->m_AdditionalInfo;
    }

    /**
     * @param string $m_AdditionalInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\Connection
     */
    public function setM_AdditionalInfo($m_AdditionalInfo)
    {
      $this->m_AdditionalInfo = $m_AdditionalInfo;
      return $this;
    }

}
