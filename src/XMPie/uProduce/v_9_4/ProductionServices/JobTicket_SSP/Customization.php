<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class Customization
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
     * @var string $m_IOType
     */
    protected $m_IOType = null;

    /**
     * @var string $m_Expression
     */
    protected $m_Expression = null;

    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\Customization
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\Customization
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_IOType()
    {
      return $this->m_IOType;
    }

    /**
     * @param string $m_IOType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\Customization
     */
    public function setM_IOType($m_IOType)
    {
      $this->m_IOType = $m_IOType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Expression()
    {
      return $this->m_Expression;
    }

    /**
     * @param string $m_Expression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\Customization
     */
    public function setM_Expression($m_Expression)
    {
      $this->m_Expression = $m_Expression;
      return $this;
    }

}
