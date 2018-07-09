<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class PlanVariable
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
     * @var string $m_Expression
     */
    protected $m_Expression = null;

    /**
     * @var string $m_Comment
     */
    protected $m_Comment = null;

    /**
     * @var boolean $m_IsDial
     */
    protected $m_IsDial = null;

    /**
     * @var string $m_Group
     */
    protected $m_Group = null;

    /**
     * @param boolean $m_IsDial
     */
    public function __construct($m_IsDial = null)
    {
      $this->m_IsDial = $m_IsDial;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanVariable
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanVariable
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanVariable
     */
    public function setM_Expression($m_Expression)
    {
      $this->m_Expression = $m_Expression;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanVariable
     */
    public function setM_Comment($m_Comment)
    {
      $this->m_Comment = $m_Comment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_IsDial()
    {
      return $this->m_IsDial;
    }

    /**
     * @param boolean $m_IsDial
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanVariable
     */
    public function setM_IsDial($m_IsDial)
    {
      $this->m_IsDial = $m_IsDial;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\PlanVariable
     */
    public function setM_Group($m_Group)
    {
      $this->m_Group = $m_Group;
      return $this;
    }

}
