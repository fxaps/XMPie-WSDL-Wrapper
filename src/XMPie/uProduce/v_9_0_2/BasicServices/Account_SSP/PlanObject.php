<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP;

class PlanObject
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
     * @var string $m_ExtendedType
     */
    protected $m_ExtendedType = null;

    /**
     * @var string $m_ReadExpression
     */
    protected $m_ReadExpression = null;

    /**
     * @var string $m_WriteExpression
     */
    protected $m_WriteExpression = null;

    /**
     * @var string $m_IOType
     */
    protected $m_IOType = null;

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
     * @var string $m_Namespace
     */
    protected $m_Namespace = null;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ExtendedType()
    {
      return $this->m_ExtendedType;
    }

    /**
     * @param string $m_ExtendedType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
     */
    public function setM_ExtendedType($m_ExtendedType)
    {
      $this->m_ExtendedType = $m_ExtendedType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ReadExpression()
    {
      return $this->m_ReadExpression;
    }

    /**
     * @param string $m_ReadExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
     */
    public function setM_ReadExpression($m_ReadExpression)
    {
      $this->m_ReadExpression = $m_ReadExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_WriteExpression()
    {
      return $this->m_WriteExpression;
    }

    /**
     * @param string $m_WriteExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
     */
    public function setM_WriteExpression($m_WriteExpression)
    {
      $this->m_WriteExpression = $m_WriteExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_IOType()
    {
      return $this->m_IOType;
    }

    /**
     * @param string $m_IOType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
     */
    public function setM_IOType($m_IOType)
    {
      $this->m_IOType = $m_IOType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
     */
    public function setM_Group($m_Group)
    {
      $this->m_Group = $m_Group;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Namespace()
    {
      return $this->m_Namespace;
    }

    /**
     * @param string $m_Namespace
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\PlanObject
     */
    public function setM_Namespace($m_Namespace)
    {
      $this->m_Namespace = $m_Namespace;
      return $this;
    }

}
