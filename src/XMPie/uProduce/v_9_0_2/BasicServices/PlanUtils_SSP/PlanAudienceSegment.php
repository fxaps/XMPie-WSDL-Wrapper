<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP;

class PlanAudienceSegment
{

    /**
     * @var string $m_ID
     */
    protected $m_ID = null;

    /**
     * @var string $m_Name
     */
    protected $m_Name = null;

    /**
     * @var int $m_Color
     */
    protected $m_Color = null;

    /**
     * @var string $m_Comment
     */
    protected $m_Comment = null;

    /**
     * @var string $m_Expression
     */
    protected $m_Expression = null;

    /**
     * @param int $m_Color
     */
    public function __construct($m_Color = null)
    {
      $this->m_Color = $m_Color;
    }

    /**
     * @return string
     */
    public function getM_ID()
    {
      return $this->m_ID;
    }

    /**
     * @param string $m_ID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP\PlanAudienceSegment
     */
    public function setM_ID($m_ID)
    {
      $this->m_ID = $m_ID;
      return $this;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP\PlanAudienceSegment
     */
    public function setM_Name($m_Name)
    {
      $this->m_Name = $m_Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Color()
    {
      return $this->m_Color;
    }

    /**
     * @param int $m_Color
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP\PlanAudienceSegment
     */
    public function setM_Color($m_Color)
    {
      $this->m_Color = $m_Color;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP\PlanAudienceSegment
     */
    public function setM_Comment($m_Comment)
    {
      $this->m_Comment = $m_Comment;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\PlanUtils_SSP\PlanAudienceSegment
     */
    public function setM_Expression($m_Expression)
    {
      $this->m_Expression = $m_Expression;
      return $this;
    }

}
