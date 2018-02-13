<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\RecipientTable_SSP;

class FieldMappingInfo
{

    /**
     * @var string $m_PlanFieldName
     */
    protected $m_PlanFieldName = null;

    /**
     * @var EFieldMappingTypes $m_MappingType
     */
    protected $m_MappingType = null;

    /**
     * @var string $m_MappingValue
     */
    protected $m_MappingValue = null;

    /**
     * @param EFieldMappingTypes $m_MappingType
     */
    public function __construct($m_MappingType = null)
    {
      $this->m_MappingType = $m_MappingType;
    }

    /**
     * @return string
     */
    public function getM_PlanFieldName()
    {
      return $this->m_PlanFieldName;
    }

    /**
     * @param string $m_PlanFieldName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\RecipientTable_SSP\FieldMappingInfo
     */
    public function setM_PlanFieldName($m_PlanFieldName)
    {
      $this->m_PlanFieldName = $m_PlanFieldName;
      return $this;
    }

    /**
     * @return EFieldMappingTypes
     */
    public function getM_MappingType()
    {
      return $this->m_MappingType;
    }

    /**
     * @param EFieldMappingTypes $m_MappingType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\RecipientTable_SSP\FieldMappingInfo
     */
    public function setM_MappingType($m_MappingType)
    {
      $this->m_MappingType = $m_MappingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_MappingValue()
    {
      return $this->m_MappingValue;
    }

    /**
     * @param string $m_MappingValue
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\RecipientTable_SSP\FieldMappingInfo
     */
    public function setM_MappingValue($m_MappingValue)
    {
      $this->m_MappingValue = $m_MappingValue;
      return $this;
    }

}
