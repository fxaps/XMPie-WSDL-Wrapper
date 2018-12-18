<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Jobs_SSP;

class JobQueryPart
{

    /**
     * @var EJobField $m_JobField
     */
    protected $m_JobField = null;

    /**
     * @var ERelationalOperator $m_Operator
     */
    protected $m_Operator = null;

    /**
     * @var ArrayOfString $m_Value
     */
    protected $m_Value = null;

    /**
     * @param EJobField $m_JobField
     * @param ERelationalOperator $m_Operator
     */
    public function __construct($m_JobField = null, $m_Operator = null)
    {
      $this->m_JobField = $m_JobField;
      $this->m_Operator = $m_Operator;
    }

    /**
     * @return EJobField
     */
    public function getM_JobField()
    {
      return $this->m_JobField;
    }

    /**
     * @param EJobField $m_JobField
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Jobs_SSP\JobQueryPart
     */
    public function setM_JobField($m_JobField)
    {
      $this->m_JobField = $m_JobField;
      return $this;
    }

    /**
     * @return ERelationalOperator
     */
    public function getM_Operator()
    {
      return $this->m_Operator;
    }

    /**
     * @param ERelationalOperator $m_Operator
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Jobs_SSP\JobQueryPart
     */
    public function setM_Operator($m_Operator)
    {
      $this->m_Operator = $m_Operator;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getM_Value()
    {
      return $this->m_Value;
    }

    /**
     * @param ArrayOfString $m_Value
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Jobs_SSP\JobQueryPart
     */
    public function setM_Value($m_Value)
    {
      $this->m_Value = $m_Value;
      return $this;
    }

}
