<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP;

class Property
{

    /**
     * @var string $m_Name
     */
    protected $m_Name = null;

    /**
     * @var string $m_Value
     */
    protected $m_Value = null;

    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\Property
     */
    public function setM_Name($m_Name)
    {
      $this->m_Name = $m_Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Value()
    {
      return $this->m_Value;
    }

    /**
     * @param string $m_Value
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\Property
     */
    public function setM_Value($m_Value)
    {
      $this->m_Value = $m_Value;
      return $this;
    }

}
