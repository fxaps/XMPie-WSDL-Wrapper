<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class PlanDataSource
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
     * @var ArrayOfPlanDataTable $m_Tables
     */
    protected $m_Tables = null;

    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanDataSource
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanDataSource
     */
    public function setM_Comment($m_Comment)
    {
      $this->m_Comment = $m_Comment;
      return $this;
    }

    /**
     * @return ArrayOfPlanDataTable
     */
    public function getM_Tables()
    {
      return $this->m_Tables;
    }

    /**
     * @param ArrayOfPlanDataTable $m_Tables
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanDataSource
     */
    public function setM_Tables($m_Tables)
    {
      $this->m_Tables = $m_Tables;
      return $this;
    }

}
