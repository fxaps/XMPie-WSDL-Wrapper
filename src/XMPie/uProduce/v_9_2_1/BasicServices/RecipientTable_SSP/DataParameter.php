<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\RecipientTable_SSP;

class DataParameter
{

    /**
     * @var string $m_ParamName
     */
    protected $m_ParamName = null;

    /**
     * @var EParamType $m_ParamType
     */
    protected $m_ParamType = null;

    /**
     * @var string $m_ParamValue
     */
    protected $m_ParamValue = null;

    /**
     * @param EParamType $m_ParamType
     */
    public function __construct($m_ParamType = null)
    {
      $this->m_ParamType = $m_ParamType;
    }

    /**
     * @return string
     */
    public function getM_ParamName()
    {
      return $this->m_ParamName;
    }

    /**
     * @param string $m_ParamName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\RecipientTable_SSP\DataParameter
     */
    public function setM_ParamName($m_ParamName)
    {
      $this->m_ParamName = $m_ParamName;
      return $this;
    }

    /**
     * @return EParamType
     */
    public function getM_ParamType()
    {
      return $this->m_ParamType;
    }

    /**
     * @param EParamType $m_ParamType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\RecipientTable_SSP\DataParameter
     */
    public function setM_ParamType($m_ParamType)
    {
      $this->m_ParamType = $m_ParamType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ParamValue()
    {
      return $this->m_ParamValue;
    }

    /**
     * @param string $m_ParamValue
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\RecipientTable_SSP\DataParameter
     */
    public function setM_ParamValue($m_ParamValue)
    {
      $this->m_ParamValue = $m_ParamValue;
      return $this;
    }

}
