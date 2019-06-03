<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP;

class JobOrderPart
{

    /**
     * @var ArrayOfEJobField $m_JobFields
     */
    protected $m_JobFields = null;

    /**
     * @var EListOrder $m_isAscending
     */
    protected $m_isAscending = null;

    /**
     * @param EListOrder $m_isAscending
     */
    public function __construct($m_isAscending = null)
    {
      $this->m_isAscending = $m_isAscending;
    }

    /**
     * @return ArrayOfEJobField
     */
    public function getM_JobFields()
    {
      return $this->m_JobFields;
    }

    /**
     * @param ArrayOfEJobField $m_JobFields
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\JobOrderPart
     */
    public function setM_JobFields($m_JobFields)
    {
      $this->m_JobFields = $m_JobFields;
      return $this;
    }

    /**
     * @return EListOrder
     */
    public function getM_isAscending()
    {
      return $this->m_isAscending;
    }

    /**
     * @param EListOrder $m_isAscending
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\JobOrderPart
     */
    public function setM_isAscending($m_isAscending)
    {
      $this->m_isAscending = $m_isAscending;
      return $this;
    }

}
