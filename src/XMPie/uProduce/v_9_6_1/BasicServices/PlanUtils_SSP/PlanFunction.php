<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP;

class PlanFunction
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
     * @var string $m_HelperExpression
     */
    protected $m_HelperExpression = null;

    /**
     * @var string $m_Comment
     */
    protected $m_Comment = null;

    /**
     * @var string $m_Language
     */
    protected $m_Language = null;

    /**
     * @var string $m_Group
     */
    protected $m_Group = null;

    /**
     * @var ArrayOfPlanFunctionParameter $m_Parameters
     */
    protected $m_Parameters = null;

    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanFunction
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanFunction
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanFunction
     */
    public function setM_Expression($m_Expression)
    {
      $this->m_Expression = $m_Expression;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_HelperExpression()
    {
      return $this->m_HelperExpression;
    }

    /**
     * @param string $m_HelperExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanFunction
     */
    public function setM_HelperExpression($m_HelperExpression)
    {
      $this->m_HelperExpression = $m_HelperExpression;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanFunction
     */
    public function setM_Comment($m_Comment)
    {
      $this->m_Comment = $m_Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Language()
    {
      return $this->m_Language;
    }

    /**
     * @param string $m_Language
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanFunction
     */
    public function setM_Language($m_Language)
    {
      $this->m_Language = $m_Language;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanFunction
     */
    public function setM_Group($m_Group)
    {
      $this->m_Group = $m_Group;
      return $this;
    }

    /**
     * @return ArrayOfPlanFunctionParameter
     */
    public function getM_Parameters()
    {
      return $this->m_Parameters;
    }

    /**
     * @param ArrayOfPlanFunctionParameter $m_Parameters
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanFunction
     */
    public function setM_Parameters($m_Parameters)
    {
      $this->m_Parameters = $m_Parameters;
      return $this;
    }

}
