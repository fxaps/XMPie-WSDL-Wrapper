<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP;

class PlanFilter
{

    /**
     * @var string $m_Name
     */
    protected $m_Name = null;

    /**
     * @var string $m_Expression
     */
    protected $m_Expression = null;

    /**
     * @var string $m_InsertExpression
     */
    protected $m_InsertExpression = null;

    /**
     * @var string $m_SelectOneExpression
     */
    protected $m_SelectOneExpression = null;

    /**
     * @var string $m_UpdateExpression
     */
    protected $m_UpdateExpression = null;

    /**
     * @var string $m_DeleteExpression
     */
    protected $m_DeleteExpression = null;

    /**
     * @var string $m_Comment
     */
    protected $m_Comment = null;

    /**
     * @var string $m_Group
     */
    protected $m_Group = null;

    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanFilter
     */
    public function setM_Name($m_Name)
    {
      $this->m_Name = $m_Name;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanFilter
     */
    public function setM_Expression($m_Expression)
    {
      $this->m_Expression = $m_Expression;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_InsertExpression()
    {
      return $this->m_InsertExpression;
    }

    /**
     * @param string $m_InsertExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanFilter
     */
    public function setM_InsertExpression($m_InsertExpression)
    {
      $this->m_InsertExpression = $m_InsertExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_SelectOneExpression()
    {
      return $this->m_SelectOneExpression;
    }

    /**
     * @param string $m_SelectOneExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanFilter
     */
    public function setM_SelectOneExpression($m_SelectOneExpression)
    {
      $this->m_SelectOneExpression = $m_SelectOneExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_UpdateExpression()
    {
      return $this->m_UpdateExpression;
    }

    /**
     * @param string $m_UpdateExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanFilter
     */
    public function setM_UpdateExpression($m_UpdateExpression)
    {
      $this->m_UpdateExpression = $m_UpdateExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_DeleteExpression()
    {
      return $this->m_DeleteExpression;
    }

    /**
     * @param string $m_DeleteExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanFilter
     */
    public function setM_DeleteExpression($m_DeleteExpression)
    {
      $this->m_DeleteExpression = $m_DeleteExpression;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanFilter
     */
    public function setM_Comment($m_Comment)
    {
      $this->m_Comment = $m_Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Group()
    {
      return $this->m_Group;
    }

    /**
     * @param string $m_Group
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\PlanFilter
     */
    public function setM_Group($m_Group)
    {
      $this->m_Group = $m_Group;
      return $this;
    }

}
