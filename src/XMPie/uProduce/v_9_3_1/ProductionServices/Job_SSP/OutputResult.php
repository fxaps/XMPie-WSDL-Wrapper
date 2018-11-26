<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP;

class OutputResult
{

    /**
     * @var string $m_FileName
     */
    protected $m_FileName = null;

    /**
     * @var string $m_FilePath
     */
    protected $m_FilePath = null;

    /**
     * @var float $m_SizeKB
     */
    protected $m_SizeKB = null;

    /**
     * @var string $m_ModifDateStr
     */
    protected $m_ModifDateStr = null;

    /**
     * @param float $m_SizeKB
     */
    public function __construct($m_SizeKB = null)
    {
      $this->m_SizeKB = $m_SizeKB;
    }

    /**
     * @return string
     */
    public function getM_FileName()
    {
      return $this->m_FileName;
    }

    /**
     * @param string $m_FileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\OutputResult
     */
    public function setM_FileName($m_FileName)
    {
      $this->m_FileName = $m_FileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_FilePath()
    {
      return $this->m_FilePath;
    }

    /**
     * @param string $m_FilePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\OutputResult
     */
    public function setM_FilePath($m_FilePath)
    {
      $this->m_FilePath = $m_FilePath;
      return $this;
    }

    /**
     * @return float
     */
    public function getM_SizeKB()
    {
      return $this->m_SizeKB;
    }

    /**
     * @param float $m_SizeKB
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\OutputResult
     */
    public function setM_SizeKB($m_SizeKB)
    {
      $this->m_SizeKB = $m_SizeKB;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ModifDateStr()
    {
      return $this->m_ModifDateStr;
    }

    /**
     * @param string $m_ModifDateStr
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\OutputResult
     */
    public function setM_ModifDateStr($m_ModifDateStr)
    {
      $this->m_ModifDateStr = $m_ModifDateStr;
      return $this;
    }

}
