<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP;

class PlanAudience
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
     * @var string $m_Group
     */
    protected $m_Group = null;

    /**
     * @var ArrayOfPlanAudienceSegment $m_Segments
     */
    protected $m_Segments = null;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanAudience
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanAudience
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanAudience
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanAudience
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanAudience
     */
    public function setM_Group($m_Group)
    {
      $this->m_Group = $m_Group;
      return $this;
    }

    /**
     * @return ArrayOfPlanAudienceSegment
     */
    public function getM_Segments()
    {
      return $this->m_Segments;
    }

    /**
     * @param ArrayOfPlanAudienceSegment $m_Segments
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanAudience
     */
    public function setM_Segments($m_Segments)
    {
      $this->m_Segments = $m_Segments;
      return $this;
    }

}
