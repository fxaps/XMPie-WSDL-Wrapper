<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class SubJobInfo
{

    /**
     * @var int $m_Index
     */
    protected $m_Index = null;

    /**
     * @var int $m_SplitNum
     */
    protected $m_SplitNum = null;

    /**
     * @var int $m_SplitType
     */
    protected $m_SplitType = null;

    /**
     * @var int $m_OrigFrom
     */
    protected $m_OrigFrom = null;

    /**
     * @var int $m_OrigTo
     */
    protected $m_OrigTo = null;

    /**
     * @param int $m_Index
     * @param int $m_SplitNum
     * @param int $m_SplitType
     * @param int $m_OrigFrom
     * @param int $m_OrigTo
     */
    public function __construct($m_Index = null, $m_SplitNum = null, $m_SplitType = null, $m_OrigFrom = null, $m_OrigTo = null)
    {
      $this->m_Index = $m_Index;
      $this->m_SplitNum = $m_SplitNum;
      $this->m_SplitType = $m_SplitType;
      $this->m_OrigFrom = $m_OrigFrom;
      $this->m_OrigTo = $m_OrigTo;
    }

    /**
     * @return int
     */
    public function getM_Index()
    {
      return $this->m_Index;
    }

    /**
     * @param int $m_Index
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SubJobInfo
     */
    public function setM_Index($m_Index)
    {
      $this->m_Index = $m_Index;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_SplitNum()
    {
      return $this->m_SplitNum;
    }

    /**
     * @param int $m_SplitNum
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SubJobInfo
     */
    public function setM_SplitNum($m_SplitNum)
    {
      $this->m_SplitNum = $m_SplitNum;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_SplitType()
    {
      return $this->m_SplitType;
    }

    /**
     * @param int $m_SplitType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SubJobInfo
     */
    public function setM_SplitType($m_SplitType)
    {
      $this->m_SplitType = $m_SplitType;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_OrigFrom()
    {
      return $this->m_OrigFrom;
    }

    /**
     * @param int $m_OrigFrom
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SubJobInfo
     */
    public function setM_OrigFrom($m_OrigFrom)
    {
      $this->m_OrigFrom = $m_OrigFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_OrigTo()
    {
      return $this->m_OrigTo;
    }

    /**
     * @param int $m_OrigTo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SubJobInfo
     */
    public function setM_OrigTo($m_OrigTo)
    {
      $this->m_OrigTo = $m_OrigTo;
      return $this;
    }

}
