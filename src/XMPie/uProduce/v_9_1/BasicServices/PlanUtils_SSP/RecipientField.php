<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class RecipientField
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
     * @var string $m_Comment
     */
    protected $m_Comment = null;

    /**
     * @var string $m_InsertExpression
     */
    protected $m_InsertExpression = null;

    /**
     * @var boolean $m_IsPrimary
     */
    protected $m_IsPrimary = null;

    /**
     * @var boolean $m_IsInternal
     */
    protected $m_IsInternal = null;

    /**
     * @param boolean $m_IsPrimary
     * @param boolean $m_IsInternal
     */
    public function __construct($m_IsPrimary = null, $m_IsInternal = null)
    {
      $this->m_IsPrimary = $m_IsPrimary;
      $this->m_IsInternal = $m_IsInternal;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\RecipientField
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\RecipientField
     */
    public function setM_Type($m_Type)
    {
      $this->m_Type = $m_Type;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\RecipientField
     */
    public function setM_Comment($m_Comment)
    {
      $this->m_Comment = $m_Comment;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\RecipientField
     */
    public function setM_InsertExpression($m_InsertExpression)
    {
      $this->m_InsertExpression = $m_InsertExpression;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_IsPrimary()
    {
      return $this->m_IsPrimary;
    }

    /**
     * @param boolean $m_IsPrimary
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\RecipientField
     */
    public function setM_IsPrimary($m_IsPrimary)
    {
      $this->m_IsPrimary = $m_IsPrimary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_IsInternal()
    {
      return $this->m_IsInternal;
    }

    /**
     * @param boolean $m_IsInternal
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\RecipientField
     */
    public function setM_IsInternal($m_IsInternal)
    {
      $this->m_IsInternal = $m_IsInternal;
      return $this;
    }

}
