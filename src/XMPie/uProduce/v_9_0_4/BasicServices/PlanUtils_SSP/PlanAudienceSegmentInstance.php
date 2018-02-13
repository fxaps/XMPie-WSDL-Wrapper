<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\PlanUtils_SSP;

class PlanAudienceSegmentInstance
{

    /**
     * @var string $m_ID
     */
    protected $m_ID = null;

    /**
     * @var string $m_Comment
     */
    protected $m_Comment = null;

    /**
     * @var string $m_Expression
     */
    protected $m_Expression = null;

    
    public function __construct()
    {
    
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\PlanUtils_SSP\PlanAudienceSegmentInstance
     */
    public function setM_ID($m_ID)
    {
      $this->m_ID = $m_ID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\PlanUtils_SSP\PlanAudienceSegmentInstance
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\PlanUtils_SSP\PlanAudienceSegmentInstance
     */
    public function setM_Expression($m_Expression)
    {
      $this->m_Expression = $m_Expression;
      return $this;
    }

}
