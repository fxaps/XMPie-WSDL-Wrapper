<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP;

class PlanDataTable
{

    /**
     * @var string $m_Name
     */
    protected $m_Name = null;

    /**
     * @var string $m_Comment
     */
    protected $m_Comment = null;

    /**
     * @var ArrayOfPlanDataField $m_Fields
     */
    protected $m_Fields = null;

    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanDataTable
     */
    public function setM_Name($m_Name)
    {
      $this->m_Name = $m_Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Comment()
    {
      return $this->m_Comment;
    }

    /**
     * @param string $m_Comment
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanDataTable
     */
    public function setM_Comment($m_Comment)
    {
      $this->m_Comment = $m_Comment;
      return $this;
    }

    /**
     * @return ArrayOfPlanDataField
     */
    public function getM_Fields()
    {
      return $this->m_Fields;
    }

    /**
     * @param ArrayOfPlanDataField $m_Fields
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanDataTable
     */
    public function setM_Fields($m_Fields)
    {
      $this->m_Fields = $m_Fields;
      return $this;
    }

}
